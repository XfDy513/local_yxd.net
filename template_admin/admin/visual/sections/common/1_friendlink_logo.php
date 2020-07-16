<!-- 组件 -->
<div class="lyrow visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$base_url}/common/plugins/visual/images/section/friendlink.png">
        <p>{lang_admin('friendship_link_logo')}</p>
    </div>
    <div class="view">
        <div class="visual-friendlink-logo">
            <div class="codearea">
                #[#if count(friendlink('image',0,99))>0#]#
                <h5>#[#lang('links')#]#</h5>
                <div class="swiper-container friendlink-logo-swiper">
                    <div class="swiper-wrapper">
                        #[#loop friendlink('image',0,99) $flink#]#
                        <div class="swiper-slide friendlink-logo-item">
                            <a href="#[#$flink['url']#]#" title="#[#$flink['name']#]#" target="_blank"><img src="#[#$flink['logo']#]#" class="img-responsive"></a>
                        </div>
                        #[#/loop#]#
                    </div>
                    <div class="swiper-pagination friendlink-logo-swiper-pagination"></div>
                </div>
                #[#/if#]#
                <script type="text/javascript">
                    var mySwiper = new Swiper ('.friendlink-logo-swiper', {
                        loop: true,
                        slidesPerView : 10,
                        slidesPerGroup : 1,
                        spaceBetween : 10,
                        lazy: true,
                        grabCursor: true,
                        autoHeight: true,
                        breakpointsInverse: true,
                        breakpoints: {
                            320: {slidesPerView: 1,slidesPerGroup : 1,},
                            480: {slidesPerView: 2,slidesPerGroup : 2,},
                            768: {slidesPerView: 4,slidesPerGroup : 4,},
                            992: {slidesPerView: 6,slidesPerGroup : 10,},
                            1200: {slidesPerView: 10,slidesPerGroup : 10,},
                        },
                        pagination: {el: '.friendlink-logo-swiper-pagination',clickable: true,},
                    });
                </script>
            </div>
            <div class="viewarea">
                <h5>友情连接</h5>
                <div class="swiper-container friendlink-logo-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                        <div class="swiper-slide friendlink-logo-item">
                            <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="swiper-pagination friendlink-logo-swiper-pagination">
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- 组件结束 -->