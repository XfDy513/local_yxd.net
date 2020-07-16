<div class="main-right-box">
<h5>{lang_admin('recommendation_bit_settings')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
<div class="row">
<div class="padding10">
<div class="padding10">
<form name="settingform" id="settingform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

 {form::textarea('attr1',get('attr1')?get('attr1'):$settings['attr1'],'style="height:150px;"')}


<div class="blank30"></div>

<div class="alert alert-warning alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<span class="glyphicon glyphicon-warning-sign"></span>	<strong>{lang_admin('after_checking_different_content_recommendation_bits_combining_with_the_recommendation_bits_in_the_content_label_different_content_can_be_called_differently')}</strong> 	[{lang_admin('one_item_per_line_format_value_item')}]
    </div>


<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<span class="glyphicon glyphicon-blackboard"></span>	<strong>{lang_admin('for_example')}</strong> 	<br/>
						<br/>{lang_admin('0_none')}
                        <br/>{lang_admin('recommendation_bit_1')}
                        <br/>{lang_admin('recommendation_bit_2')}
                        <br/>{lang_admin('recommendation_bit_3')}
                        <br/>{lang_admin('recommendation_bit_4')}
                        <br/>{lang_admin('recommendation_bit_5')}
    </div>



    <div class="line"></div>
    <div class="blank20"></div>
    <input  name="submit" value="1" type="hidden">
    <input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg"/>

</div>




 </form>
</div>
</div>
</div>
<div class="blank30"></div>
</div>
</div>