<!--   
Package: Free Social Media Icons
Author: Konstantin 
Source: http://kovshenin.com/2011/freebies-a-simple-social-icon-set-gpl/

License: GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
-->

<ul class="spicesocialwidget">

<?php if(of_get_option('effect_fb')) : ?>
<li class="facebook">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_fb'));?>" target="_blank" title="facebook">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_gp')) : ?>
<li class="googleplus">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_gp'));?>" target="_blank" title="googleplus">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_pinterest')) : ?>
<li class="pinterest">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_pinterest'));?>" target="_blank" title="pinterest">
</a></li>
<?php else : ?>
<?php endif; ?>
	<?php if(of_get_option('effect_tw')) : ?>
<li class="twitter">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_tw'));?>" target="_blank" title="twitter">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_rss')) : ?>
<li class="rss">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_rss'));?>" target="_blank" title="rss">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_skype')) : ?>
<li class="skype">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_skype'));?>" target="_blank" title="Skype">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_vimeo')) : ?>
<li class="vimeo">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_vimeo'));?>" target="_blank" title="vimeo">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_dribbble')) : ?>
<li class="dribbble">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_dribbble'));?>" target="_blank" title="dribble">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_flickr')) : ?>
<li class="flickr">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_flickr'));?>" target="_blank" title="flickr">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_in')) : ?>
<li class="linkedin">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_in'));?>" target="_blank" title="linkedin">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_youtube')) : ?>
<li class="youtube">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_youtube'));?>" target="_blank" title="youtube">
</a></li>
<?php else : ?>
<?php endif; ?>
<?php if(of_get_option('effect_instagram')) : ?>
<li class="instagram">
<a rel="nofollow" href="<?php echo esc_url(of_get_option('effect_instagram'));?>" target="_blank" title="Instagram">
</a></li>
<?php else : ?>
<?php endif; ?>
</ul>