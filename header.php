<ul class="menu">
        <li><a href="index.html">Home</a></li>
       <!--- <li><a href="page2-dogfood.html">Dog Food</a></li>
        <li><a href="page3-catfood.html">Cat Food</a></li>
        <li><a href="page4-birdfood.html">Bird Food</a></li>
        <li><a href="page5-fishfood.html">Fish Food</a></li>--->
        <?php
            include_once "class/User.php";
            $user = new User(null, "", "", "");
            $categories = $user->viewCategories();
            $i = 0;
            while ($i < sizeof($categories)){
                $category = $categories[$i];
                echo "<li><a href='products.php?categoryID=".$category->id."'>".$category->name."</a></li>";
                $i = $i + 1;
            }
            ?>
    </ul>