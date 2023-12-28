<?php

return [
    // SITE NAME
    [
        'type' => 'text',
        'name' => 'site_name',
        'label' => 'Tên webiste',
        'default' => 'vBrand Theme One',
    ],

    // SIDE LOGO
    [
        'type' => 'image',
        'name' => 'site_logo',
        'label' => 'Site logo',
        'default' => null,
    ],

    // BANNER
    [
        'type' => 'image',
        'name' => 'banner_image',
        'label' => 'Banner Image',
        'default' => get_template_directory_uri() . '/images/couch.png',
    ],
    [
        'type' => 'textarea',
        'name' => 'banner_title',
        'label' => 'Banner Title',
        'default' => 'Modern Interior <span clsas="d-block">Design Studio</span>',
    ],
    [
        'type' => 'textarea',
        'name' => 'banner_description',
        'label' => 'Banner Description',
        'default' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.',
    ],
    [
        'type' => 'text',
        'name' => 'banner_main_button_link',
        'label' => 'Banner Main Button Link',
        'default' => '',
    ],
    [
        'type' => 'text',
        'name' => 'banner_main_button_text',
        'label' => 'Banner Main Button Text',
        'default' => 'Shop Now',
    ],
    [
        'type' => 'text',
        'name' => 'banner_second_button_link',
        'label' => 'Banner Second Button Link',
        'default' => '',
    ],
    [
        'type' => 'text',
        'name' => 'banner_second_button_text',
        'label' => 'Banner Second Button Text',
        'default' => 'Explore',
    ],
    
    // PRODUCTS MODULE
    [
        'type' => 'boolean',
        'name' => 'products_module_show',
        'label' => 'Show Products Module',
        'default' => true,
    ],
    [
        'type' => 'text',
        'name' => 'products_module_title',
        'label' => 'Products Module Title',
        'default' => 'SẢN PHẨM MỚI',
    ],
    [
        'type' => 'textarea',
        'name' => 'products_module_description',
        'label' => 'Products Module Description',
        'default' => 'Mẫu sản phẩm mới nhất được chúng tôi cập nhật hàng ngày',
    ],
    [
        'type' => 'select',
        'name' => 'products_module_type',
        'label' => 'Products Module: Type',
        'default' => 'all',
        'options' => [
            ['value' => 'all', 'text' => 'Mặc định'],
            ['value' => 'hot', 'text' => 'Hot'],
            ['value' => 'feature', 'text' => 'Feature'],
            ['value' => 'new', 'text' => 'New'],
        ],
    ],
    [
        'type' => 'select',
        'name' => 'products_module_number',
        'label' => 'Products Module: Number of Products',
        'default' => 3,
        'options' => [
            ['value' => 2, 'text' => 2],
            ['value' => 3, 'text' => 3],
            ['value' => 5, 'text' => 5],
        ],
    ],

    // WHY US MODULE
    [
        'type' => 'boolean',
        'name' => 'why_us_module_show',
        'label' => 'Show Why Us Module',
        'default' => true,
    ],
    [
        'type' => 'image',
        'name' => 'why_us_module_banner',
        'label' => 'Why Us Module: Banner',
        'default' => get_template_directory_uri() . '/images/why-choose-us-img.jpg',
    ],
    [
        'type' => 'text',
        'name' => 'why_us_module_title',
        'label' => 'Why Us Module Title',
        'default' => 'Tại sao Chọn Chúng Tôi',
    ],
    [
        'type' => 'textarea',
        'name' => 'why_us_module_description',
        'label' => 'Why Us Module Description',
        'default' => 'chúng tôi mang lại sự kết hợp hoàn hảo giữa thiết
            kế độc đáo và chất lượng xuất sắc. Chúng tôi tôn trọng nguyên
            liệu tự nhiên và sử dụng chúng để tạo ra những sản phẩm nội thất đẹp mắt và bền bỉ.',
    ],
    [
        'type' => 'text',
        'name' => 'why_us_module_block_1_title',
        'label' => 'Why Us Module: Block 1 Title',
        'default' => 'Nhanh & Vận chuyển Free',
    ],
    [
        'type' => 'textarea',
        'name' => 'why_us_module_block_1_description',
        'label' => 'Why Us Module: Block 1 Description',
        'default' => 'Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí',
    ],
    [
        'type' => 'image',
        'name' => 'why_us_module_block_1_icon',
        'label' => 'Why Us Module: Block 1 Icon',
        'default' => get_template_directory_uri() . '/images/truck.svg',
    ],
    [
        'type' => 'text',
        'name' => 'why_us_module_block_2_title',
        'label' => 'Why Us Module: Block 2 Title',
        'default' => 'Nhanh & Vận chuyển Free',
    ],
    [
        'type' => 'textarea',
        'name' => 'why_us_module_block_2_description',
        'label' => 'Why Us Module: Block 2 Description',
        'default' => 'Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí',
    ],
    [
        'type' => 'image',
        'name' => 'why_us_module_block_2_icon',
        'label' => 'Why Us Module: Block 2 Icon',
        'default' => get_template_directory_uri() . '/images/bag.svg',
    ],
    [
        'type' => 'text',
        'name' => 'why_us_module_block_3_title',
        'label' => 'Why Us Module: Block 3 Title',
        'default' => '24/7 Hỗ trợ',
    ],
    [
        'type' => 'textarea',
        'name' => 'why_us_module_block_3_description',
        'label' => 'Why Us Module: Block 3 Description',
        'default' => 'Chúng tôi Luôn luôn ở đây, 24/7. Hãy tin tưởng chúng tôi khi bạn cần gấp.',
    ],
    [
        'type' => 'image',
        'name' => 'why_us_module_block_3_icon',
        'label' => 'Why Us Module: Block 3 Icon',
        'default' => get_template_directory_uri() . '/images/support.svg',
    ],
    [
        'type' => 'text',
        'name' => 'why_us_module_block_4_title',
        'label' => 'Why Us Module: Block 4 Title',
        'default' => 'Thiết kế sáng tạo, hiện đại',
    ],
    [
        'type' => 'textarea',
        'name' => 'why_us_module_block_4_description',
        'label' => 'Why Us Module: Block 4 Description',
        'default' => 'Với nhiều thiết kế đẹp, sáng tạo, luôn mang đến cho bạn sức sống mới.',
    ],
    [
        'type' => 'image',
        'name' => 'why_us_module_block_4_icon',
        'label' => 'Why Us Module: Block 4 Icon',
        'default' => get_template_directory_uri() . '/images/return.svg',
    ],

    
    // OURS project
    [
        'type' => 'boolean',
        'name' => 'our_project_module_show',
        'label' => 'Show Our Project Module',
        'default' => true,
    ],
    [
        'type' => 'text',
        'name' => 'our_project_module_title',
        'label' => 'Our Project Module Title',
        'default' => 'Dự án',
    ],
    [
        'type' => 'text',
        'name' => 'our_project_module_alias',
        'label' => 'Our Project Module Alias',
        'default' => 'Dự án đã triển khai',
    ],
    [
        'type' => 'text',
        'name' => 'our_project_module_description',
        'label' => 'Our Project Module Description',
        'default' => 'Trải nghiệm các dự án do chúng tôi trực tiếp thiết kế và thi công',
    ],
    [
        'type' => 'image',
        'name' => 'our_project_project_1',
        'label' => 'Our Project Module: Project 1',
        'default' => get_template_directory_uri() . '/images/project-1.jpg',
    ],
    [
        'type' => 'image',
        'name' => 'our_project_project_2',
        'label' => 'Our Project Module: Project 2',
        'default' => get_template_directory_uri() . '/images/project-2.jpg',
    ], 


    // ARTICLES
    [
        'type' => 'boolean',
        'name' => 'articles_module_show',
        'label' => 'Show Articles Module',
        'default' => true,
    ],
    [
        'type' => 'select',
        'name' => 'articles_module_number',
        'label' => 'Articles Module: Number of Articles',
        'default' => 3,
        'options' => [
            ['value' => 2, 'text' => 2],
            ['value' => 3, 'text' => 3],
            ['value' => 4, 'text' => 4],
        ],
    ],
    [
        'type' => 'select',
        'name' => 'articles_module_sort',
        'label' => 'Articles Module: Sort',
        'default' => 'newest',
        'options' => [
            ['value' => 'newest', 'text' => 'Newest'],
            ['value' => 'oldest', 'text' => 'Oldest'],
        ],
    ],

    // FOOTER
    [
        'type' => 'textarea',
        'name' => 'copyright_line',
        'label' => 'Copyright Line',
        'default' => '© 2017–2023 vBrand Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
    ],

    // FOOTER LOGO
    [
        'type' => 'image',
        'name' => 'footer_logo',
        'label' => 'Footer Logo',
        'default' => get_template_directory_uri() . '/images/sofa.png',
    ],
     // FOOTER
     [
        'type' => 'boolean',
        'name' => 'about_us_show',
        'label' => 'Show About Us Module',
        'default' => true,
    ],
    [
        'type' => 'textarea',
        'name' => 'aboutus_content',
        'label' => 'About Us content',
        'default' => '© 2017–2023 vBrand Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
    ],
    [
        'type' => 'text',
        'name' => 'aboutus_title',
        'label' => 'About Us title',
        'default' => '© 2017–2023 vBrand Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
    ],



];