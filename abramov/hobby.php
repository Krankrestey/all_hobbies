<?php
include('session.php');
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="conf.css">
<title>
    Просто сайт
</title>
</head>
<body>
    <body background="10.jpg">
<?php
echo "<div align='right' class='reg'>";
if (isset($_SESSION['name'])){
echo "<div align='right' class='reg'> Привет, ";echo $_SESSION['name'];echo "<a href='reg.php?logout=1'><br> Выход</a>";
echo "</div>";}
else {
echo "<a href='reg.php'>Регистрация</a> или <a href='sign-in.php'>Вход</a>";}
echo "</div>";
?>
      <table><table border="1">
        <tr><tr align="center">
    <td colspan="4"> <h1><b>Добро пожаловать</b></h1></td>
</tr>
<tr><tr align="center">
            <td><h3><a href="index.php">Главная страница</a></h3></td>
            <td><h3><a href="hobby.php">Хобби</a></h3></td>
            <td><a href="blog.php"><h3>Создать блог</a></h3></td>
            <td><a href="3dprinter.php"><h3>Мои работы</h3></td>
</tr>
</table>
<?php
echo 
"  <div class='print'>  
<p>    Я, Абрамов Александр, сейчас учусь в НГУ на ФИТе.
<br>Я решил не заморачиваться с хобби)
<br>У меня не очень много увлечений, и расскажу я вам только об одном.</p>
<p>    Чтение - это очень увлекательно и полезно.
Благодаря ему, я научился не давать оценку людям, быть добрее к окружающим, рассматривать ситуацию с разных сторон, ценить родных
и близких за то, что они для меня делают. </p>
<p>    Польза также заключается в том, что ты начинаешь смотреть на свои проблемы по-другому.
Ты просто вспоминаешь, как тяжело было героям в их жизни, и твои проблемы кажутся мелкими и несерьезными.
Чтение перевернуло мое представление о жизни и мире, дало мне множество незабываемых часов размышлений и дискуссий.
И еще один плюс, с тобой всегда можно о чем-то поговорить. Ты можешь рассуждать о любой философской проблеме легко и здраво, понимая 
аппонента с полуслова.</p>
<p>    У меня есть два любимых писателя: Ф.М. Достоевский и Л.Н. Толстой.
Читать их произведения - высшее эстетическое наслаждение.
А 'Идиота' я могу перечитывать бесконечно.
Знаю, кто-то может сказать, что у меня не самое увлекательное хобби, но мне это безразлично)</p>
<br>
<p align='center'>    А здесь я приведу ТОП-10 книг, обязательных к прочтению:</p>
<br>
<p align='center'>1)Идиот</p>
<p align='center'>2)Анна Каренина</p>
<p align='center'>3)Смерть Ивана Ильича</p>
<p align='center'>4)Братья Карамазовы</p>
<p align='center'>5)Гранатовый браслет</p>
<p align='center'>6)Мастер и Маргарита</p>
<p align='center'>7)Доктор Живаго</p>
<p align='center'>8)Таинственный остров</p>
<p align='center'>9)Убить пересмешника</p>
<p align='center'>10)Отцы и дети</p>
<br>
<p align='center'>
<img height='220px' width='140px' src='1.jpg'>
<img height='220px' width='140px' src='2.jpg'>
<img height='220px' width='140px' src='3.jpg'>
<img height='220px' width='140px' src='4.jpg'>
<img height='220px' width='140px' src='5.jpg'>
<br>
<img height='220px' width='140px' src='6.jpg'>
<img height='220px' width='140px' src='7.jpg'>
<img height='220px' width='140px' src='8.jpg'>
<img height='220px' width='140px' src='9.jpg'>
<img height='220px' width='140px' src='11.jpg'></p></div>";
?>
</body>
</html>
