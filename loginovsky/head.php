<nav>
<ul>
<a href="/~loginovsky/index.php"><li>БЛОГ</li></a>
<a href="/~loginovsky/talk.php" class="right"><li>ДОКЛАД</li></a>
<a href="/~loginovsky/hobby.php" class="right"><li>ХОББИ</li></a>

<?php
if(!isset($_COOKIE['logged'])){
	        echo '<a href="/~loginovsky/login.php"><li class="right">ВОЙТИ</li></a>';
}
else
{
	        $user=substr(rtrim($_COOKIE['logged']),0,-32);
		        echo '<a href="/~loginovsky/vyhod.php"><li class="right">ВЫЙТИ</li></a>';
		        echo '<a href="/~loginovsky/addnote.php"><li class="right">ДОБАВИТЬ ПОСТ</li></a>';
			        echo '<a href=#><li class="right">ПРИВЕТ,'.$user.'!</li></a>';
}
?>
<a href="/~saltuk/Hobbies/">ВЕРНУТЬСЯ НА ОБЩУЮ</A>
</ul>
</nav>

