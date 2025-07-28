<?php
function Auth()
{
  if (session()->get('isLoggedIn')) {
    $userId = session()->get('user_id');
    $user = model('UserModel')
      ->find($userId);
    if ($user != null) {
      return $user;
    } else {
      return false;
    }
  }
  return false;
}
