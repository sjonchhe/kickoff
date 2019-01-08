<?php
@$menuid=$_GET['id'];


?>
<ul class="nav">
        <li class="<?php if($menuid=='1')
                        {echo 'active'; }
                        else {echo 'noactive';}
                        ?>">
        <a href="index.php?id=1">
            <i class="pe-7s-graph"></i>
            <p>Dashboard </p>
        </a>
    </li>

    <li class="<?php if($menuid=='2' )
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
            <a href="index.php?id=2">
            <i class="pe-7s-users"></i>
            <p>Users/Admins List <?php //$user->userCount(); ?></p>
          </a>
        </a>
    </li>
    <li class="<?php if($menuid=='3')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=3">
            <i class="pe-7s-menu"></i>
            <p>Menus</p>
        </a>
    </li>
  <!--  <li class="<?php if($menuid=='4')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
          <a href="index.php?id=4">
              <i class="pe-7s-world"></i>
              <p class="text-danger"><Strike>Competition*</strike></p>
          </a>
      </li>

    <li class="<?php if($menuid=='9')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=9">
            <i class="pe-7s-ball"></i>
            <p class="text-danger"><Strike>Teams*</strike></p>
        </a>
    </li>-->
    <li class="<?php if($menuid=='5')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=5">
            <i class="pe-7s-user"></i>
            <p >Players </p>
        </a>
    </li>
    <li class="<?php if($menuid=='6')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=6">
            <i class="pe-7s-news-paper"></i>
            <p>Articles</p>
        </a>
    </li>
    <li class="<?php if($menuid=='8')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=8">
            <i class="pe-7s-graph3"></i>
            <p>League Standing</p>
        </a>
    </li>
    <li class="<?php if($menuid=='7')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=7">
            <i class="pe-7s-photo"></i>
            <p>Gallery</p>
        </a>
    </li>
    <li class="<?php if($menuid=='10')
                    {echo 'active'; }
                    else {echo 'noactive';}
                    ?>">
        <a href="index.php?id=10">
            <i class="pe-7s-comment"></i>
            <p>Comments</p>
        </a>
    </li>
    </ul>
