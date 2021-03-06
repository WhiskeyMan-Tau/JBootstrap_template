<?php $module_separator = '' ?>

<?php //Top columns ?>

<?php // Top Pre first. Модуль во всю ширину.==================================================== ?>
<?php if ( $this->countModules('top-pre-first')) :?>
<div class="row top-pre-first">
	<div class="<?=$classContainer;?>">
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-pre-first" style="bootstrap" />
		</div>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>


<?php // Top 3 small columns or 1 small 1 middle or 1 big ======================================== ?>
<?php if ( $this->countModules('top-first-left') or $this->countModules('top-first-center') or 
	$this->countModules('top-first-right') ) : ?>
<div class="row top-first">
	<div class="<?=$classContainer;?>">
		<?php // Top left column ------------------------------------------------------------------------?>
		<?php // Если левый, централный и правый - тогда маленький ?>
		<?php if ( $this->countModules('top-first-left') and 
			$this->countModules('top-first-center') and 
			$this->countModules('top-first-right') ) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-first-left" style="bootstrap" />
		</div>
		<?php // Если левый и центральный или правый, тогда средний размер ?>
		<?php elseif ($this->countModules('top-first-left') and 
			($this->countModules('top-first-center') or $this->countModules('top-first-right')) ) : ?>
		<div class="col-md-8">
			<jdoc:include type="modules" name="top-first-left" style="bootstrap" />
		</div>
		<?php // Если только один левый, тогда размер на всю ширину ?>
		<?php elseif($this->countModules('top-first-left')) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-first-left" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php //Top center column -----------------------------------------------------------------------?>
		<?php // Если центральный и правый или левый тогда маленький размер ?>
		<?php if ( $this->countModules('top-first-center') and 
			($this->countModules('top-first-left') or $this->countModules('top-first-right')) ) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-first-center" style="bootstrap" />
		</div>
		<?php // Если только центральный, тогда размер на всю ширину ?>
		<?php elseif ( $this->countModules('top-first-center') ) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-first-center" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php //Top Right column ------------------------------------------------------------------------?>
		<?php // Если правый и левый - тогда маленький ?>
		<?php if ( $this->countModules('top-first-right') and 
			$this->countModules('top-first-left') ) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-first-right" style="bootstrap" />
		</div>
		<?php // Если правый и центральный, тогда средний размер ?>
		<?php elseif ( $this->countModules('top-first-right') and $this->countModules('top-first-center') ) : ?>
		<div class="col-md-8">
			<jdoc:include type="modules" name="top-first-right" style="bootstrap" />
		</div>
		<?php // Если только один левый, тогда размер на всю ширину ?>
		<?php elseif( $this->countModules('top-first-right') ) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-first-right" style="bootstrap" />
		</div>
		<?php endif; ?>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>


<?php // Top Pre second. Модуль во всю ширину.=================================================== ?>
<?php if ( $this->countModules('top-pre-second')) :?>
<div class="row top-pre-second">
	<div class="<?=$classContainer;?>">
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-pre-second" style="bootstrap" />
		</div>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>


<?php if ( $this->countModules('top-second-left') or $this->countModules('top-second-center') or 
	$this->countModules('top-second-right') ) : ?>
<div class="row top-second">
	<div class="<?=$classContainer;?>">
		<?php // Top 3 small or 2 middle ============================================================ ?>
		<?php // Left column ?>
		<?php if ( $this->countModules('top-second-left') and 
			$this->countModules('top-second-center') and 
			$this->countModules('top-second-right') ) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-second-left" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-left') and 
			($this->countModules('top-second-center') or $this->countModules('top-second-right')) ) : ?>
		<div class="col-md-6">
			<jdoc:include type="modules" name="top-second-left" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-left') ) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-second-left" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php // Top center column ?>
		<?php if ( $this->countModules('top-second-center') and 
			$this->countModules('top-second-left') and 
			$this->countModules('top-second-right') ) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-second-center" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-center') and 
			($this->countModules('top-second-left') or $this->countModules('top-second-right')) ) : ?>
		<div class="col-md-6">
			<jdoc:include type="modules" name="top-second-center" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-center') ) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-second-center" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php // Top right column ?>
		<?php if ( $this->countModules('top-second-right') and 
			$this->countModules('top-second-left') and 
			$this->countModules('top-second-center')) : ?>
		<div class="col-md-4">
			<jdoc:include type="modules" name="top-second-right" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-right') and 
			($this->countModules('top-second-left') or $this->countModules('top-second-center')) ) : ?>
		<div class="col-md-6">
			<jdoc:include type="modules" name="top-second-right" style="bootstrap" />
		</div>
		<?php elseif ( $this->countModules('top-second-right') ) : ?>
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-second-right" style="bootstrap" />
		</div>
		<?php endif; ?>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>


<?php // Top Pre third. Модуль во всю ширину.==================================================== ?>
<?php if ( $this->countModules('top-pre-third')) :?>
<div class="row top-pre-third">
	<div class="<?=$classContainer;?>">
		<div class="col-md-12">
			<jdoc:include type="modules" name="top-pre-third" style="bootstrap" />
		</div>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>


<?php if ( $this->countModules('top-third-1') or $this->countModules('top-third-2') or 
	$this->countModules('top-third-3') or $this->countModules('top-third-4')) : ?>
<div class="row top-third">
	<div class="<?=$classContainer;?>">
		<?php // 4 very small===========================================================================?>
		<?php // 1 ?>
		<?php if ( $this->countModules('top-third-1') and 
			$this->countModules('top-third-2') and 
			$this->countModules('top-third-3') and 
			$this->countModules('top-third-4')) : ?>
		<div class="col-md-3">
			<jdoc:include type="modules" name="top-third-1" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php // 2 ?>
		<?php if ( $this->countModules('top-third-2') and 
			$this->countModules('top-third-1') and 
			$this->countModules('top-third-3') and 
			$this->countModules('top-third-4')) : ?>
		<div class="col-md-3">
			<jdoc:include type="modules" name="top-third-2" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php // 3 ?>
		<?php if ( $this->countModules('top-third-3') and 
			$this->countModules('top-third-1') and 
			$this->countModules('top-third-2') and 
			$this->countModules('top-third-4')) : ?>
		<div class="col-md-3">
			<jdoc:include type="modules" name="top-third-3" style="bootstrap" />
		</div>
		<?php endif; ?>

		<?php // 4 ?>
		<?php if ( $this->countModules('top-third-4') and 
			$this->countModules('top-third-1') and 
			$this->countModules('top-third-2') and 
			$this->countModules('top-third-3')) : ?>
		<div class="col-md-3">
			<jdoc:include type="modules" name="top-third-4" style="bootstrap" />
		</div>
		<?php endif; ?>
	</div>
</div>
<?php echo $module_separator; ?>
<?php endif; ?>
<?php // End Top columns ?>