<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="main">

	<div id="container">

		<div class="width-sidebar">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>

	<?php 
	$ndays = 90;
	if(floor((strtotime(date('YmdHi')) - strtotime($plxShow->plxMotor->plxRecord_arts->f('date'))) / (60*60*24)) > $ndays) : ?>		
<p style=" background-color: #ffe17a; text-align:center; vertical-align:middle; color: black; padding:5px;border-radius: 2px;box-shadow;color: #404040; "> Attention, ce billet se traine depuis plus de 3 mois.
 Les informations qu'il contient ne sont peut-être plus à jour. </p> <br />
	<?php endif; ?>
					<h1>
	
						<?php $plxShow->artTitle(''); ?>

					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <span class="author"><?php $plxShow->artAuthor(); ?></span> /
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> /
						<span class="comments-nb"><?php $plxShow->artNbCom(); ?></span>



					</p>
				</header>

				<section>


					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> /
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>



			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
