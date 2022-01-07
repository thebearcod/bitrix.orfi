<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

header('Content-Type: application/json');

use App\Classes\Helpers\Helper;
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;
use \Bitrix\Main\Web\Json;
use \Bitrix\Main\Application;
use \Bitrix\Main\SystemException;
use \Bitrix\Main\LoaderException;
use \Bitrix\Main\UserTable;

try {
    $app = Application::getInstance();
    $request = $app->getContext()->getRequest();
} catch (SystemException $e) {
    echo Json::encode(['error' => $e->getMessage()]);
    die;
}
switch ($request->get('form')) {
    case "review":
        try {
            $productId = Helper::getIntVal($request->get('product_id'));
            $name = Helper::getSafeStrVal($request->get('name'));
            $comment = Helper::getSafeStrVal($request->get('comment'));
            $rating = Helper::getIntVal($request->get('rating'));

            Loader::includeModule("highloadblock");

            $applicationsHlTable = HighloadBlockTable::getList([
                "select" => ["ID", "NAME", "TABLE_NAME"],
                "filter" => ["TABLE_NAME" => "b_reviews"]
            ])->fetch();

            $applicationsHlEntity = HighloadBlockTable::compileEntity($applicationsHlTable);
            $applicationsDataManager = $applicationsHlEntity->getDataClass();

            $data = [
                'UF_NAME' => $name,
                'UF_TEXT' => $comment,
                'UF_RATING' => $rating,
                'UF_PRODUCT' => $productId
            ];

            if ($applicationsDataManager::add($data)->isSuccess()) {
                echo Json::encode(['add' => 'success']);
            }
        } catch (SystemException $e) {
            echo Json::encode(['error' => $e->getMessage()]);
        } catch (LoaderException $e) {
            echo Json::encode(['error' => $e->getMessage()]);
        } catch (Exception $e) {
            echo Json::encode(['error' => $e->getMessage()]);
        }
        break;
    case "wishlist":
        $cUser = new CUser();
        if ($cUser->IsAuthorized()) {
            $UserFavorites = UserTable::getList([
                'select' => ['UF_FAVORITES'],
                'filter' => ['ID' => $cUser->GetID()]
            ])->fetch();

            if ($request->get('remove') == "Y") {
                if(($key = array_search($request->get('product'), $UserFavorites['UF_FAVORITES'])) !== false){
                    unset($UserFavorites['UF_FAVORITES'][$key]);
                }
                $favorites = $UserFavorites['UF_FAVORITES'];
            } else {
                $favorites = array_merge($UserFavorites['UF_FAVORITES'], [$request->get('product')]);
            }

            $update = $cUser->Update(
                $cUser->GetID(),
                [
                    "UF_FAVORITES" => $favorites
                ]
            );

            if ($request->get('remove') == "Y") {
                echo Json::encode(['remove favorite' => $update]);
            } else {
                echo Json::encode(['add favorite' => $update]);
            }
        } else {
            //cookie
            if ($_COOKIE["favorites"]) {
                $cookie = Json::decode($_COOKIE["favorites"]);
                unset($_COOKIE["favorites"]);

                if ($request->get('remove') == "Y") {
                    if (($key = array_search($request->get('product'), $cookie)) !== false) {
                        unset($cookie[$key]);
                    }
                    $favorites = $cookie;
                } else {
                    $favorites = array_merge($cookie, [$request->get('product')]);
                }
            } else {
                $favorites = [$request->get('product')];
            }

            if (setcookie("favorites", Json::encode($favorites), time() + 604800, "/")) {
                echo Json::encode(['update favorite' => $favorites]);
            } else {
                echo Json::encode(['update favorite' => false]);
            }
        }
        break;
    case "add-cart":
        //Loader::includeModule("sale");
        echo Json::encode(['add' => 'add']);
        /*$arFields = array(
            "PRODUCT_ID" => $request->get('product'),
            "PRODUCT_PRICE_ID" => $request->get('priceId'),
            "PRICE" => $request->get('price'),
            "CURRENCY" => "RUB",
            "WEIGHT" => $request->get('weight'),
            "QUANTITY" => $request->get('qty'),
            "LID" => LANG,
            "CAN_BUY" => "Y",
            "NAME" => $request->get('name'),
            "DETAIL_PAGE_URL" => $request->get('detail')
        );

        if ($add = (new CSaleBasket)->Add($arFields)) {
            echo Json::encode(['add' => $add]);
        }*/
        break;
    case "сallback-header":
        if (!empty($request->get('name')) && !empty($request->get('phone'))) {

            $res = [];
            $arFields = [
                "NAME" => $request->get('name'),
                "PHONE" => $request->get('phone')
            ];

            $arFilter = Array(
                "TYPE_ID" => array("CALLBACK_FORM"),
                "ACTIVE" => "Y",
            );

            $rsMess = CEventMessage::GetList($by = "id", $order = "asc", $arFilter);

            while($arMess = $rsMess->GetNext()) {
                $res[] = CEvent::Send($arMess['EVENT_NAME'], $arMess['LID'], $arFields, "Y", $arMess["ID"]);
            }

            echo Json::encode(['status' => true,'result' => $res]);
        } else {
            echo Json::encode(['status' => false,'result' => 'Форма заполнена с ошибками!']);
        }
        break;
    case "one-click-order": // добавление заказа в один клик, только по имени и телефону
        if (!empty($request->get('name')) && !empty($request->get('phone'))) {
            //print_r($request);
            CModule::IncludeModule("sale");
            CModule::IncludeModule("catalog");
            /*
            // --- очистка корзины
            CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
            $basket = Bitrix\Sale\Basket::create(SITE_ID);
            $product = [
                'PRODUCT_ID' => $productID,
                'QUANTITY' => $quantity,
            ];
            $item = $basket->createItem("catalog", $request->get('productId'));
            $item->setFields($product);
            // --- создание пустого заказа
            $orderId = makeOrder($request->get('name'),$request->get('phone'),$basket);
            */

            /*
            // --- очистка корзины
            CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
            // --- создание пустого заказа
            $orderId = makeOrder($request->get('name'),$request->get('phone'));
            // --- добавление товара к заказу
            $resAddProdToOrder = addProdToOrder($request->get('productId'),$orderId, $request->get('quantity'));
            $strOrderList = '';
            updateOrderParams($orderId,$strOrderList);
            sendNotification($name,$phone, $strOrderList, $orderId);*/



            $basket = Bitrix\Sale\Basket::create(SITE_ID);
            $product = [
                'PRODUCT_ID' => $request->get('productId'),
                'PRODUCT_PROVIDER_CLASS' => '\Bitrix\Catalog\Product\CatalogProvider',
                'CURRENCY' => 'RUB',
                'QUANTITY' => $request->get('quantity'),
            ];
            $item = $basket->createItem("catalog", $request->get('productId'));
            $item->setFields($product);
            $orderList = $item;

            $order = Bitrix\Sale\Order::create(SITE_ID, 1);
            $order->setPersonTypeId(1);
            $order->setField('USER_DESCRIPTION', 'Заказ в Один клик');
            $order->setBasket($basket);

            $shipmentCollection = $order->getShipmentCollection();
            $shipment = $shipmentCollection->createItem(
                Bitrix\Sale\Delivery\Services\Manager::getObjectById(2) // 1 - ID службы доставки
            );

            $shipmentItemCollection = $shipment->getShipmentItemCollection();

            foreach ($basket as $basketItem)
            {
                $item = $shipmentItemCollection->createItem($basketItem);
                $item->setQuantity($basketItem->getQuantity());
            }

            $paymentCollection = $order->getPaymentCollection();
            $payment = $paymentCollection->createItem(
                Bitrix\Sale\PaySystem\Manager::getObjectById(2) // 1 - ID платежной системы
            );

            $payment->setField("SUM", $order->getPrice());
            $payment->setField("CURRENCY", $order->getCurrency());

            // Устанавливаем свойства
            $propertyCollection = $order->getPropertyCollection();
            $phoneProp = $propertyCollection->getPhone();
            $phoneProp->setValue($request->get('phone'));
            $nameProp = $propertyCollection->getPayerName();
            $nameProp->setValue($request->get('name'));
            $orderId = $order->getId();

            $result = $order->save();
            $orderId = $order->getId();
            $price = $order->getPrice();
            $date = $order->getField('DATE_INSERT');

            if (!$result->isSuccess()) {
                echo Json::encode(['status' => false, 'result' => $result->getErrors()]);
            }
            $arEventFields = [
                "NAME" => $request->get('name'),
                "PHONE" => $request->get('phone'),
                "ORDER_LIST" => $request->get('productName'),
                "ORDER_ID" => $orderId,
                "PRICE" => $request->get('price'),
                "ORDER_DATE" => $date
            ];

            $resultSend = CEvent::Send("ONE_CLICK_ORDER", "s1", $arEventFields);
            echo Json::encode(['status' => true,'result' => $result, 'resultSend' => $resultSend, 'orderId' => $orderId]);
        } else {
            echo Json::encode(['status' => false,'result' => 'Форма заполнена с ошибками!']);
        }

        break;

    default:
        echo Json::encode(['error' => 'param form not found']);
        break;
}
