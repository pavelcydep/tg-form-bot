<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form id="form-contact" method="POST" class="contact-form" autocomplete="off" enctype="multipart/form-data">
 
  <p class="contact-form__title">Закажите обратный звонок и наш консультант свяжется с вами</p>
 
  <div class="preloader"></div>
  <p class="contact-form__message"></p>
 
  <!-- Поле с именем -->
  <div class="contact-form__input-wrapper contact-form__input-wrapper_name">
    <input name="name" type="text" class="contact-form__input contact-form__input_name"
           placeholder="Введите ваше имя">
  </div>
 
  <!-- Поле с телефоном -->
  <div class="contact-form__input-wrapper contact-form__input-wrapper_phone">
    <input name="phone" type="tel" class="contact-form__input contact-form__input_phone"
           placeholder="Введите ваш телефон">
  </div>
 
  <!-- Поле с выбором файла -->
  <div class="contact-form__input-wrapper">
    <input type="file" name="files[]" id="contact-form__input_file"
           class="contact-form__input contact-form__input_file" multiple>
    <label for="contact-form__input_file" class="contact-form__file-button">
      <span class="contact-form__file-text">Выберите файл</span>
    </label>
  </div>
 
  <!--Поле с темой в письме-->
  <input name="theme" type="hidden" class="contact-form__input contact-form__input_theme"
         value="Заявка с сайта Smartlanding.biz">
 
  <!--Кнопка отправки формы-->
  <button type="submit" class="contact-form__button">Отправить</button>
 
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/telegramform/js/telegramform.js"></script>
</body>
</html>

