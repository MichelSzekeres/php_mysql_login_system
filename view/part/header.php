<header>
    <div class="logo"><a href="<?=page::url().'/'?>">Logo</a></div>
    <?php if(user::is_logged_in()){?>
        <div class="h-buttons"><a href="<?=page::url().'/sign-in'?>">Sign in</a></div>
        <div class="h-buttons"><a href="<?=page::url().'/sign-up'?>">Sign up</a></div>
    <?php }else{ ?> 
        <div class="h-buttons"><a href="<?=page::url().'/logout'?>">Logout</a></div>
    <?php } ?>
</header>