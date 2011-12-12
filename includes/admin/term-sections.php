<div class="frame">
	<?php $id = $_GET['termsections']; ?>
    <h3><?php echo display_term_info($id, 'termname'); ?> <?php echo display_term_info($id, 'year'); ?></h3>
    
    <p><strong>Holidays</strong></p>
    <?php output_holidays($id); ?>
</div>

<div class="frame">
	<h3><a href="admin.php?termsections=<?php echo $id; ?>&gradepolicies=<?php echo $id; ?>">Grading Policies</a></h3>
    <?php display_gradepolicy_editor($id); ?>
</div>