<?php
 function get_user_count(){
 	$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"user_details");
					$user_count="";
					$query = "select count(*) as user_count from users";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
							$user_count=$row['user_count'];
					}
					return ($user_count);
 }

  function get_book_count(){
 	$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"user_details");
					$book_count="";
					$query = "select count(*) as book_count from books";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
							$book_count=$row['book_count'];
					}
					return ($book_count);
 }

   function get_category_count(){
 	$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"user_details");
					$category_count="";
					$query = "select count(*) as category_count from category";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
							$category_count=$row['category_count'];
					}
					return ($category_count);
 }
    function get_author_count(){
 	$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"user_details");
					$author_count="";
					$query = "select count(*) as author_count from authors";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
							$author_count=$row['author_count'];
					}
					return ($author_count);
 }

     function get_issued_book_count(){
 	$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"user_details");
					$issue_book_count="";
					$query = "select count(*) as issue_book_count from authors";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
							$issue_book_count=$row['issue_book_count'];
					}
					return ($issue_book_count);
 }
?>