<?php get_header() ?>
	<div id="container">
		<div id="content">
			
			<div class="section">
			    <p class="h2">LATEST</p>
				<ul>
				<?php $my_query = new WP_Query('posts_per_page=7');				
						while ( $my_query->have_posts() ) : $my_query->the_post() ?>

				<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d, Y', '', '', false ), get_the_time() ) ?></abbr></span>
					<span class="sep"> —  </span>
					<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
				</li><!-- .post -->

				<?php endwhile; ?>
				</ul>
			</div>

			<div class="section">
			    <p class="h2">ABOUT ME</p>
                <blockquote><p>列出些自己喜欢的东西，慢慢补充 :)</p></blockquote>
                <p></p>
                <ul class="me">
					<li>Fav Editor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="reference external" title="introduce Vim" href="http://baike.baidu.com/view/113188.htm/" target="_blank">Vim</a></li>
					<li>Use System &nbsp;&nbsp;&nbsp;<a class="reference external" title="introduce Win7" href="http://baike.baidu.com/view/761518.htm?fromId=1998802">Win7</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="reference external" title="introduce Mac OS X" href="http://baike.baidu.com/view/24778.htm" target="_blank">Mac OS X</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="reference external" title="introduce Ubuntu 12.04" href="http://baike.baidu.com/view/7891097.htm" target="_blank">Ubuntu 12.04</a></li>
					<li>Fav Browser &nbsp;&nbsp;<a class="reference external" title="introduce Google Chrome"href="http://baike.baidu.com/view/1835854.htm" target="_blank">Google Chrome</a> &nbsp;&nbsp;&nbsp;&nbsp; </li>
				</ul>
					<p>......</p>
				<br>
			</div>

			<div class="section">
			    <p class="h2">ABOUT MY WORK</p>
                <p>作为个电子专业毕业的人来说，就焊过几个收音机，以及设计过几个简单的数字+模拟电路，至于到底是几个，就不要详细追究了 :(</p>
                <p>作为一个程序员来说，也没写过什么让自己特别满意的代码。东西都在<a class="reference external" href="http://github.com/foursking" target="_blank">Github</a>上面，可以去看看。</p>
			</div>
			<div class="section">
                <p class="h2">ABOUT THIS WEBSITE</p>
                <p>建站的初衷是想要一个属于自己的BLOG，开始的开始选择了网易的LOFER，意指“宽广开放的自由空间”尝试了几天，但是总是感觉所说的自由空间对于一个动不动就想修改代码的人来说，就显得有点太泛泛。当然，动不动就把自由挂在嘴边，总让我感觉有点小愤青。 我所想要的是有一个地方记录生活，分享经验，用我自己喜欢的STYLE来展示  That's all &nbsp;:D</p>


				<p>BLOG是用<a href="http://www.wordpress.org/" target="_blank">wordpress</a>驱动的，但是取消了自豪的采用wordpress，因为想想感觉也没啥可以自豪的。</p>

                <p>最后 "你走，我不送你；你来，无论网络多卡，我都欢迎你~" <img src="http://www.udonmai.com/wp-includes/images/smilies/icon_smile.gif" alt=":)" class="wp-smiley"></p>
			</div>

			
			<div class="section">
			    <p class="h2">FIND ME ELSEWHERE</p>
				<ul class="simple">
					<li><a href="http://github.com/foursking/" target="_blank">Github</a></li>
					<li><a href="http://www.douban.com/people/59302465/" target="_blank">豆瓣</a></li>
					<li><a href="http://www.v2ex.com/member/foursking" target="_blank">V2EX</a></li>
					<li><a href="http://weibo.com/u/2166318483" target="_blank">微博</a></li>
				</ul>
			</div>			

		</div><!-- #content -->
	</div><!-- #container -->


<?php //get_sidebar() ?>
<?php get_footer() ?>
