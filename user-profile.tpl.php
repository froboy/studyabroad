<!-- begin user-profile.tpl.php -->
<div class="profile content">
	<?php if ($account->picture){ 
		print '<div class="picture"><a href="mailto:'.$account->mail.'"><img src="'.base_path() .$account->picture.'" title="Contact '.$account->profile_first_name.'"><p class="caption">Contact '.$account->profile_first_name.' &raquo;</a></p></div>';}
	print '<dl>'.$profile['info'];
	if ($profile['programs']):?>
		<dt>Coordinator for the following programs:</dt>
		<?php print $profile['programs'];
	endif; ?>
	</dl>
</div>	
<?php
//print $account->realname;
//print $account->content['user_picture']['#value'];
//print '<pre>'. check_plain(print_r($account, 1)) .'</pre>';
//print '<pre>'. check_plain(print_r($profile, 1)) .'</pre>';
//dpm ($account);
//dpm($profile);
?>
<?php /*<div class="profile">
  <div class="picture">
  <a class="active" title="View user profile." href="/study-abroad/users/scw"><img title="Sarah Walter's picture" alt="Sarah Walter's picture" src="http://ajs.uchicago.edu:8082/study-abroad/sites/ajs.uchicago.edu.study-abroad/files/img/users/picture-6.jpg"></a></div>
  <h3>Personal Information</h3>

<dl>
  <dt class="profile-profile_first_name">First Name</dt>
<dd class="profile-profile_first_name">Sarah</dd>
<dt class="profile-profile_last_name">Last Name</dt>
<dd class="profile-profile_last_name">Walter</dd>
<dt class="profile-profile_title">Title</dt>
<dd class="profile-profile_title">Assistant Dean for International Education</dd>
</dl>
  <h3>History</h3>

<dl class="user-member">
  <dt>Member for</dt>
<dd>1 week 3 days</dd>
</dl>
  <h3>Related content</h3>

<dl class="user-member">
  <dt>Program</dt>
<dd><ul><li class="first"><a href="/study-abroad/programs/paris-europe-east-west">Paris: Europe: East &amp; West</a></li>
<li><a href="/study-abroad/programs/paris-astronomy-0">Paris: Astronomy </a></li>
<li><a href="/study-abroad/programs/beijing-east-asian-civilizations">Beijing: East Asian Civilizations</a></li>
<li><a href="/study-abroad/programs/cape-town-african-civilizations">Cape Town: African Civilizations</a></li>
<li><a href="/study-abroad/programs/paris-african-civilizations-colonialism-migration-diaspora">Paris: African Civilizations: Colonialism, Migration, Diaspora </a></li>
<li><a href="/study-abroad/programs/paris-european-civilization">Paris: European Civilization </a></li>
<li><a href="/study-abroad/programs/paris-european-civilization-french">Paris: European Civilization (in French)</a></li>
<li><a href="/study-abroad/programs/paris-international-studies">Paris: International Studies</a></li>
<li><a href="/study-abroad/programs/paris-primates-and-human-evolution">Paris: Primates and Human Evolution</a></li>
<li><a href="/study-abroad/programs/paris-social-sciences">Paris: Social Sciences</a></li>
<li><a href="/study-abroad/programs/paris-humanities">Paris: Humanities</a></li>
<li><a href="/study-abroad/programs/paris-mathematics">Paris: Mathematics</a></li>
<li class="last"><a href="/study-abroad/programs/paris-intermediate-french">Paris: Intermediate French</a></li>
</ul></dd>
</dl>
</div>*/?>