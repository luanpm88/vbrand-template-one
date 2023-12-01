# WordPress Theme Requirements
   1. Cài Woocomerce và cấu hình: để sinh ra các page cần thiết: Shop, cart, ..
   2. Cài vBrandSync plugin:
      - cd wp-content/plugins
      - git clone git@github.com:luanpm88/vbrandsync.git
      - Activate vBrandSync plugin.

# WordPress Theme Installation Instructions
   1. Cài theme vBrand Template One:
      - cd wp-content/themes
      - git clone git@github.com:luanpm88/vbrand-template-one.git
   2. Activate vBrand Template One: Đăng nhập vào WordPress Admin Panel, vào menu Appearance, activate theme vBrand Template One
   3. Tạo page mới: Vào menu Pages, tạo 1 mới 1 page bất kỳ (VD: Homepage). Bên tay phải mục Template, chọn Homepage. Chọn publish.
   4. Cấu hình homepage: Vào menu Appearance => Customize => Homepage settings => HomePage => Chọn Homepage. Chọn Publish.
   5. Mở trang chính của WordPress site sẽ thấy theme đẹp full nội dung...

# Kết nối vBrand Customer và WordPress site để quản trị nội dung theme từ vBrand
   1. Trong WordPress admin panel. Chọn menu vBrand Connect. Copy API endpoint của WP tại section OUT
   2. Đăng nhập vào admin view của vBrand Admin (nhánh brand, cờ APP_BRAND=true). Vào Customer --> Customers. Chọn edit customer tương ứng với WordPress site. Vào tab WordPress Connect
   3. Dán API enpoint ở bước 1 vào phần WordPress conntect. Nhấn lưu.
   4. Customer tương ứng sau khi đăng nhập, thấy website menu của mình gồm:
      - Giao diện: danh sách, mua theme, activate theme.
      - Cấu hình nội dung: edit toàn bộ nội dung trên WP theme tại đây (site logo, banner text, woo mudle settings,...)
