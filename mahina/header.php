<html>
<style>
td{
	border-radius:30px;
}
</style>
 <head>	
 </head>
<body background="/~saltuk/Hobbies/images/fon.jpg">
  <h1 align=center> Welcome! </h1>
  <div align=left>
   <table width=100%>
     <tr style="font-weight:900;">
       <?php if ($_COOKIE['login']!="") echo '<td colspan=4 align=right> Ваш логин: '. $_COOKIE["login"] .'</td>
	 <tr>
	   <td colspan=4 align=right> <a href="/~mahina/logout.php"> Выйти </a> </td>
	 </tr>';
	   else echo '<td colspan=4 align=right> <a href="/~mahina/login.php"> Войти </a>  </td>
	 </tr>
     <tr>
	   <td colspan=4 align=right> <a href="/~mahina/register.php"> Зарегистрироваться </a> </td>
	 </tr>'; ?>
	 <tr height="50px" size=4 style="background:rgba(120,120,255,0.7); font-weight:500;">
       <td width=25% align=center> <a href="/~mahina"> <font size=4> Главная </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/blog.php"> <font size=4> Новости </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/talk.php"> <font size=4> Сжатие данных </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/hobby.php"> <font size=4> Хобби </font> </a> </td>
     </tr>
  </table>