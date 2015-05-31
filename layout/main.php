<?php
/*
	Construção do Layout Fixo
	main e responsavel pelo menu da pagina antes de entra no painel 
	O painel por medida de segunraça terá um layount proprio.
*/
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="" id="bs-example-navbar-collapse-1">
            <a class="navbar-text navbar-right" target="_blank" href="https://twitter.com/HaShieldProtect"><img width="20" height="20" src='img/twitter.png'></a>
            <a class="navbar-text navbar-right" target="_blank" href="https://www.facebook.com/pages/HaShield-Protection/1462260474060732?ref=tn_tnmn"><img width="20" height="20" src='img/facebook.png'></a>

            <div class="fb-like navbar-text navbar-right" data-href="https://www.facebook.com/pages/HaShield-Protection/1462260474060732?fref=nf" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            
            <ul class="nav navbar-nav">
                <li class='active'>
                    <a href="index.php"><?php echo MENU1 ?></a>
                </li>  
				<li class=''>
                    <a href="login.html">Login</a>
				</li>
                <li class=''>
					<a href="registers/index.html">Register</a>
                 </li>
                <li class=''>
					<a href="help/index.html">Help & F.A.Q</a>
                </li>
                <li class=''>
                    <a href="license/index.html">License</a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->

        <div>

        </div>

    </div><!-- /.container -->
</nav>