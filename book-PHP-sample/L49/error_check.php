<?php
if (!preg_match('/\A[[:^cntrl:]]{1,100}+\z/u',$_POST['recipe_name'])) {
    throw new Exception('料理名を正しく入力してください。');
}
if (!preg_match('/\A[123]\z/',$_POST['category'])) {
    throw new Exception('カテゴリを正しく入力してください。');
}
if (!preg_match('/\A[123]\z/',$_POST['difficulty'])) {
    throw new Exception('難易度を正しく入力してください。');
}
if (!preg_match('/\A[0-9]{1,4}+\z/',$_POST['budget'])) {
    throw new Exception('予算を正しく入力してください。');
}
if (!preg_match('/\A[\r\n[:^cntrl:]]{1,200}+\z/u',$_POST['howto'])) {
    throw new Exception('作り方を正しく入力してください。');
}
?>
