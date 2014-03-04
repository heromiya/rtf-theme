	<div id="container">
		<div id="content">
			<div>
				<?php 
			if($lang == 'en'){
				echo '<h2 class="topheader-first">Pickup</h2>';
				$cat_lang='English';
			}elseif($lang == 'ja'){
				echo '<h2 class="topheader-first">ピックアップ</h2>';
				$cat_lang='Japanese';
			}
			
					$sticky = get_option( 'sticky_posts' );
					$args = array(
						'posts_per_page' => 3,
						'post__in'  => $sticky,
						'ignore_sticky_posts' => 1,
						'orderby'=>'date',
						'order'=>'DESC',
						'category_name'=>$cat_lang
					);
					query_posts( $args );
							
					if ( have_posts() ) : 
					while ( have_posts()) :
								the_post();
								echo '<a href="';
								the_permalink();
								echo '" class="pickuphref">';
								echo '<div class="pickuparticle">';
								  echo '<h3 class="pickupheader">';
									the_title();
								  echo '</h3>';
								the_post_thumbnail(array(120,120),array('align'=>'left','hspace'=>'8'));
								  echo '<p>';
								the_excerpt();  
								echo '</p></div>';
								echo '</a>';
					endwhile; 
					else:
					endif;

					wp_reset_query();
				?>
			</div>
			<div id="ui-tab">
			<?php 
			if($lang == 'en'){
				echo '<h2 class="topheader">Topics</h2>
				<ul>
					<li><a href="#policy-tab"><span>Policy</span></a></li>
					<li><a href="#innovation-tab"><span>Innovation</span></a></li>
					<li><a href="#generation-tab"><span>Generation</span></a></li>
					<li><a href="#energy-tab"><span>Renewable Energy</span></a></li>
					<li><a href="#efficiency-tab"><span>Energy Efficiency</span></a></li>
					<li><a href="#telecommunication-tab"><span>Telecommunication</span></a></li>
					<li><a href="#transport-tab"><span>Transport</span></a></li>
					<li><a href="#and-tab"><span>Urban and Water</span></a></li>
					<li><a href="#thematic-tab"><span>Thematic</span></a></li>
				</ul>
				';
				}elseif($lang == 'ja'){
				echo '<h2 class="topheader">トピック</h2>
				<ul>
					<li><a href="#policy-tab"><span>政策</span></a></li>
					<li><a href="#innovation-tab"><span>イノベーション</span></a></li>
					<li><a href="#generation-tab"><span>電力</span></a></li>
					<li><a href="#energy-tab"><span>再生可能エネルギー</span></a></li>
					<li><a href="#efficiency-tab"><span>省エネ</span></a></li>
					<li><a href="#telecommunication-tab"><span>通信</span></a></li>
					<li><a href="#transport-tab"><span>交通</span></a></li>
					<li><a href="#and-tab"><span>都市</span></a></li>
					<li><a href="#thematic-tab"><span>テーマ</span></a></li>
					<li><a href="#social-tab"><span>社会</span></a></li>
				</ul>';
			}

			$posts_per_page = 7
			?>

<div id="policy-tab"><ul><?php if($lang=='en') {query_posts('tag=,energy-policy,unbundling,power-trade,power-retail,power-secto-reform,tariff-reform,gas-sector-reform,environment,climate,regional,apec,east-asia,recep,wto,system-export,jcm,gcf,globalization&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,エネルギー政策,発送分離,電力取引,電力小売,電力自由化,料金制度改革,ガス自由化,環境技術,気候変動,国際協力,エイペック,東アジア連携,アールセップ,WTO,インフラ輸出,二国間クレジット,緑の気候基金,グローバリゼーション&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="innovation-tab"><ul><?php if($lang=='en') {query_posts('tag=,d-smartgrid,smart-meter,urban-microgrid,rural-microgrid,agribusiness,battery-storage,hydrogen,fuel-cell-battery,big-data,t-smartgrid,share,bitcoin,smartgrid,robot,ccs,health&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,スマートコミュニテイ,スマートメータ,都市型マイクログリッド,農村型マイクログリッド,アグリビジネス,電池,水素,燃料電池,電力ビッグデータ,送電スマートグリッド,シェア,仮想通貨,スマートグリッド,ロボット,ＣＯ2回収,ヘルスケア&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="generation-tab"><ul><?php if($lang=='en') {query_posts('tag=,clean-energy,nuclear,thermal-power,coal,igcc,shale,cogeneration,lng,heating,combined-cycle,hydro,retail,home-appliance,tepco&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,クリーンエネルギー,原子力,火力発電,石炭火力,石炭ガス化,シェールガス,コジェネ,ガス発電,熱供給事業,コンバインドサイクル発電,水力発電,電力小売,家電,東京電力&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="energy-tab"><ul><?php if($lang=='en') {query_posts('tag=,re,pv,csp,biomass,wind,geothermal,msw,mini-hydro&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,再生可能エネルギー,太陽光発電,太陽熱発電,バイオマス発電,風力発電,地熱発電,ゴミ発電,小水力発電&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="efficiency-tab"><ul><?php if($lang=='en') {query_posts('tag=,ee,demand-response,ems,energy-service-company&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,省エネ,デマンドレスポンス,エネルギーマネージメントシステム,エスコ&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="telecommunication-tab"><ul><?php if($lang=='en') {query_posts('tag=,telecommunication,smart-phone&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,通信網,スマートフォン&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="transport-tab"><ul><?php if($lang=='en') {query_posts('tag=,green,ev,fuel-cell-car,car,phv,small-vehicle,automatic-drive,transport-policy,urban-transport,multi-modal,railway,air-transport,water-transport,ship,port,logistics,cross-border-road,cross-border-railway,district-road,rural-road,safety,traffic-demand-management,custom&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,グリーントランスポート,電気自動車,燃料電池車,エコカー,ハイブリッド車,小型自動車,自動運転,交通システム,都市交通,複合交通,鉄道,空運,水運,ハイブリッド船,港湾,ロジスティクス,国際道路,国際鉄道,幹線道路,地方道路,安全,交通量管理,関税&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="and-tab"><ul><?php if($lang=='en') {query_posts('tag=,urban,water-supply,sanitation,waste-management,urban-planning,low-carbon-city&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,都市,水供給,下水道,ゴミ処理,都市計画,低炭素都市&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="thematic-tab"><ul><?php if($lang=='en') {query_posts('tag=,ppp,finance,microfinance,smefinance,cloud-funding,green-financing-instrument,policy,procurement,governance,environmental,trade-facilitation,tvet,ecommerce,ominichannel,showrooming,knowledge,social&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,官民パートナーシップ,革新的金融,マイクロファイナンス,中小企業金融,クラウドファンディング,グリーンファイナンス,革新的政策,革新的入札,統治,環境管理,貿易振興,技術職業教育訓練,イーコマース,オムニチャンネル,ショールーミング,ナレッジ,ソーシャルメディア&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}?></ul></div>
<div id="social-tab"><ul><?php if($lang=='en') {query_posts('tag=,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,"<a,title="""",title=""""&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 90) {echo mb_substr(the_title('','',false),0,90).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}elseif($lang=='ja') {query_posts('tag=,税制,関税,健康保険,生活保護,年金保険,介護保険,外交,就職,転職,労働,障碍者雇用,大学,中等教育,少子化,起業&posts_per_page='.$posts_per_page.'&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang); if ( have_posts() ) : while ( have_posts() ) : the_post(); echo '<li><a href="'; the_permalink(); echo '">'; if(mb_strlen(the_title('','',false)) > 50) {echo mb_substr(the_title('','',false),0,50).'...';} else {the_title();}; echo '</a></li>'; endwhile; else: endif; wp_reset_query();}
?></ul></div>

			</div>			
			<?php 
			if($lang == 'en'){
				echo '<h2 class="topheader">Latest Posts</h2>';
				query_posts('posts_per_page=10&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang);
			}elseif($lang == 'ja'){
				echo '<h2 class="topheader">最新の記事</h2>';
				query_posts('posts_per_page=10&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang);
			}

					if ( have_posts() ) : 
					while ( have_posts()) :
								the_post();
								echo '<a href="';
								the_permalink();
								echo '" class="pickuphref">';
								echo '<div class="pickuparticle">';
								  echo '<h3 class="pickupheader">';
									the_title();
								  echo '</h3>';
								the_post_thumbnail(array(120,120),array('align'=>'left','hspace'=>'8'));
								  echo '<p>';
								the_excerpt();  
								echo '</p></div>';
								echo '</a>';
					endwhile; 
					else:
					endif;


/*			if ( have_posts() ) : 
					while ( have_posts()) : the_post();
						echo '<li><a href="';
						the_permalink();
						echo '" title="';
						the_title();
						echo '" rel="bookmark">';
						echo the_title();
						echo '</a> by ';
						the_author();
					endwhile; 
				else:
				endif;*/
				wp_reset_query();
			?>			
			<!-- .post -->

			<?php comments_template() ?>

			</ul>
			
			
			<?php 
			if($lang=='en'){
				echo '<h2 class="topheader">Popular Posts</h2>';
				$args = array(
					'cat' => $category_English_id
				);
				}
			elseif($lang=='ja'){
				echo '<h2 class="topheader">人気の記事</h2>';
				$args = array(
					'cat' => $category_Japanese_id
				);

				}
			wpp_get_mostpopular($args);

			 ?>
			
		</div><!-- #content -->
	</div><!-- #container -->
