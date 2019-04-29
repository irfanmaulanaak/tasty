<?php
if(!$posts->num_rows){
    echo 'No posts.';
} else {
    while ($post = $posts->fetch_object()){
        echo "<h3>$post->title</h3>";
        echo "<a href=\"?c=Post&m=edit&id=$post->id\">Edit</a>";
        printf('
        <form action="?c=Post&m=delete" method="post">
            <input type="hidden" name="id" value="%d">
            <input type="submit"value="Delete">
        </form>',$post->id);

        echo "<p align=\"justify\">$post->content</p>";
    }
}
?>
    
</body>
</html>