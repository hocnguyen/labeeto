<div class="container">
	
	<form id="mainSearch" class="stdForm" action="<?php echo $this->createUrl('index/search') ?>">
		<div id="simpleSearch">
			<a class="topLogo" href="#"><img alt="Logo" width="130" src="<?php echo "{$this->baseUrl}/images/small_logo.png" ?>"/></a>
			<input name="SearchForm[topic]" type="text" class="topic" value="<?php echo isset($key)?$key:'' ?>" />
			<input name="SearchForm[subtopic]" type="text" class="subtopic" value="" placeholder="optional subtopic (singular or hyphenated)" readonly/>
			<input name="simple" type="submit" class="stdBtn greenBtn" value="Express Search on Topic only">
			<div class="clearfix"></div>
			<div class="eg">
				<span class="pull-left">Don't use plurals</span>
				<ul class="pull-right">
					<li>e.g. printer</li>
					<li>cutting-board</li>
					<li>city</li>
				</ul>
			</div>
			<div class="eg">
				<ul class="pull-left">
					<li>(laser)</li>
					<li>(wood)</li>
					<li>(to-live)</li>
				</ul>
			</div>
		</div>
		<div id="advanceSearch">
			<fieldset class="clearfix inline">
				<label>Where: in</label>
				<input name="SearchForm[where]" type="text" value="" placeholder="continue > country > state > state/region > city"/>
			</fieldset>
			<fieldset class="clearfix inline">
				<label>When: in</label>
				<input name="SearchForm[when]" type="text" value="" placeholder="centure > year > month > date"/>
			</fieldset>
			<fieldset class="clearfix inline">
				<label>Whom: by</label>
				<input name="SearchForm[whom]" type="text" value="" placeholder="person OR group/team OR brand/company"/>
			</fieldset>
			<div class="panelBtn alignRight">
				<input name="advance" type="submit" value="Search" class="stdBtn greenBtn" style="margin-right:8%"/>
				<input name="reset" type="button" value="Clear All" class="stdBtn" />
			</div>
		</div>
	</form>
</div>