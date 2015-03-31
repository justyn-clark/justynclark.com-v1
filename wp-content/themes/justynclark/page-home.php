<?php
/*
Template Name: Home  Full Width
*/
get_header('home'); ?>

<body id="home">

<!-- Begin Content -->
<div class="content-wrapper">

<ul>
	<li id="me-item">
		<?php include('words/me.php'); ?>
		<p>Justyn, a unique blend of talent a style.</p>
		<div class="me-btns">
			<a class="fi-page" href="http://resume.justynclark.com"><span>Resume</span></a>
			<a class="fi-mail" href="mailto:ijustynclark@gmail.com"><span>Email</span></a>
		</div>
	</li>
	<li id="work-item">
		<?php include('words/work.php'); ?>
		<span class="social">           
             <a class="github" href="/portfolio">portfolio</a>
            <a class="github" href="https://github.com/justyn-clark" target="_blank">github</a>
             <a class="github" href="http://www.linkedin.com/in/justinclarkjohnson/" target="_blank">linkedin</a>
			 
            </span>
	</li>
	<li id="play-item">
		<?php include('words/play.php'); ?>
		<span class="social">
        <a class="blog" href="/blog">blog</a> 
        <!--<a class="fitness" href="http://justynclarkfitness.com" target="_blank">fitness</a>-->      
          <a class="instagram" href="http://instagram.com/ijustynclark" target="_blank">instagram</a>
          <a class="twitter" href="http://twitter.com/justynclark" target="_blank">twitter</a>		     
		</span>
	</li>
</ul>

</div>

		
<?php get_footer('home'); ?>