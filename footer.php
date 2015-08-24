<?php if (!defined('PLX_ROOT')) exit; ?>

<footer role="contentinfo">

	<p>
		<?php $plxShow->mainTitle('link'); ?> © <?php echo date('Y') ?> - <?php $plxShow->subTitle(); ?>
	</p>
	<p>
		<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
		<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
		<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
		<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
		<?php $plxShow->httpEncoding() ?>
	</p>
	<p class="copyright">
		Thème <a href ="https://github.com/dadall/b2d-theme"> B2D </a> inspiré de SkyA <a href="http://pluxopolis.net">Pluxopolis</a> © 2014 - Sous licence Creative Commons BY NC.<br />

	</p>

</footer>

</body>

</html>
