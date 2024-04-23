<?php
class UserGroupHandler
{public static function addUserToGroup($user_id, $arFields){
    $userName = $arFields['NAME'];
    $userGroupId = false;
    $userSeller = $arFields['UF_USER_SELLER'];
    $userBuyer = $arFields['UF_USER_BUYER'];
    if ($userSeller) {
        $userGroupId = 7;
    } elseif ($userBuyer) {
        $userGroupId = 6;
    }
    $user = new CUser;
        $user->Update($user_id, array("GROUP_ID" => Array($userGroupId)));
    }
}

AddEventHandler("main", "OnAfterUserAdd", array("UserGroupHandler", "addUserToGroup"));
