
<div class="main-right-box">
<h5>{lang_admin('voting_statistics')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo url('table/list/table/ballot');?>" class="btn btn-secondary" >{lang_admin('return')}</a>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

<div class="table-responsive">



	<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{lang_admin('voted')}</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{lang_admin('no_vote')}</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content ballot-list">
    <div role="tabpanel" class="tab-pane active" id="home">

	{loop $data['voteduser'] $username}
    <span>{$username}</span>
    {/loop}
	</div>

    <div role="tabpanel" class="tab-pane" id="profile">

	{loop $data['unvoteuser'] $username}
    <span>{$username}</span>
    {/loop}
	
	</div>
  </div>


	</div>
<div class="blank30"></div>
</div>
</div>

