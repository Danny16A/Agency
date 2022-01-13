<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Đặt phòng</title>
  <link rel="stylesheet" href="css/BookHotelRoom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <header>
    <?php include "./Header.php" ?>
  </header>
  <div class='main bg-light'>
    <div class="row-container-sm bg-light">
      <div class='main_header'>
        <a href="./hotel_detail.php">Quay lại</a>
        <h3>Thông tin đặt phòng</h3>
      </div>
      <div class="row">
        <div class="left col-sm-8">
          <div class="row card mt-3 pe-3 pb-4 thongtinkhach">
            <h5 class="mt-3">Thông tin người liên hệ</h5>
            <form>
              <h6 class="mt-3 ms-3">Nhập thông tin của bạn hoặc người chịu trách nhiệm giữ liên lạc với nhà cung cấp
                dịch
                vụ lưu trú.</h6>
              <form class="row g-4 ">
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Họ*</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control is-invalid border border-1" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      <div id="validationServerUsernameFeedback " class="invalid-feedback text-black-50">
                        Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                      </div>
                    </div>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
                  <div class="form-body-item col-md-6 ">
                    <label for="validationServer02" class="form-label">Số điện thoại*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3">
                    <label for="validationServer03" class="form-label">Email*</label>
                    <input type="text" class="form-control " id="validationServer03"
                      aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-body-item col-md-6 mt-6">
                  <label for="validationServer04" class="form-label">Quốc gia</label>
                  <select class="form-select " aria-label="Default select example">
                    <option selected>Việt Nam</option>
                    <option value="1">Trung quốc</option>
                    <option value="2">Thái Lan</option>
                    <option value="3">Hàn Quốc</option>
                </div>
                <div class="form-body-item col-mb-6 mt-3 form-check ">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Tôi là người lưu trú</label>
                </div>
              </form>
            </form>
          </div>
          <div class="row card mt-3 pe-3 pb-4 thongtinkhach">
            <h5 class="mt-3">Thông tin người lưu trú</h5>
            <form>
              <form class="row g-4">
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Họ*</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control is-invalid border border-1" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      <div id="validationServerUsernameFeedback " class="invalid-feedback text-black-50">
                        Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                      </div>
                    </div>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
                  <div class="form-body-item col-md-6 ">
                    <label for="validationServer02" class="form-label">Số điện thoại*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3">
                    <label for="validationServer03" class="form-label">Email*</label>
                    <input type="text" class="form-control " id="validationServer03"
                      aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
              </form>
            </form>

          </div>

          <div class="row card mt-3  payment">
            <h5 class="mt-3">Phương thức thanh toán</h5>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
              <label class="form-check-label" for="flexRadioDefault1">
                Thanh toán sau
              </label>
              <p class=" fw-lighter">Chỗ nghỉ sẽ xử lý thanh toán. Tùy vào điều kiện đặt phòng mà bạn có thể thanh toán
                1
                phần hoặc toàn bộ tại chỗ nghỉ.</p>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
              <label class="form-check-label" for="flexRadioDefault2">
                Thanh toán ngay
              </label>
              <p class=" fw-lighter">Hahalolo sẽ hỗ trợ xử lý thanh toán của bạn. Bạn sẽ thanh toán toàn bộ hôm nay khi
                hoàn tất đặt phòng</p>
            </div>
          </div>
          <div class="row card mt-3 pe-3 pb-4 payment1">
            <h5 class="mt-3">Thông tin thanh toán</h5>
            <form>
              <form class="row g-4 ">
                <div class="form-body-item col-mb-6 mt-3 form-check ">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Sử dụng thông tin người liên hệ</label>
                </div>
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Họ*</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control is-invalid border border-1" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      <div id="validationServerUsernameFeedback " class="invalid-feedback text-black-50">
                        Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).
                      </div>
                    </div>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên đệm & tên*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
                  <div class="form-body-item col-md-6 ">
                    <label for="validationServer02" class="form-label">Số điện thoại*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3">
                    <label for="validationServer03" class="form-label">Email*</label>
                    <input type="text" class="form-control " id="validationServer03"
                      aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-body-item col-md-12 pe-3 ">
                  <label for="validationServer02" class="form-label">Địa chỉ*</label>
                  <input type="text" class="form-control " id="validationServer02" value="" required>
                </div>
                <div class="d-flex me-1">
                  <div class="form-body-item col-md-6">
                    <label for="validationServerUsername" class="form-label">Quốc gia*</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Việt Nam</option>
                      <option value="1">Trung quốc</option>
                      <option value="2">Thái Lan</option>
                      <option value="3">Hàn Quốc</option>
                    </select>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Bang/Thành phố*</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>


              </form>
            </form>
          </div>
          <div class="row card mt-3 pe-3 pb-4 payment2">
            <h5 class="mt-3">Hình thức thanh toán</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Thẻ ATM hoặc iBanking của các ngân hàng trong nước
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <label for="validationServer02" class="form-label fw-lighter">Hỗ trợ các cổng thanh toán</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                      <img src="./img/payme.png" style=" height: 30px; width: 80px" alt="" srcset="">

                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                      <img src="./img/alepay.png" style=" height: 30px; width: 70px" alt="" srcset="">

                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Thẻ thanh toán quốc tế (Visa/Master)
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <label for="validationServer02" class="form-label fw-lighter">Hỗ trợ các cổng thanh toán</label>
                  <div class="images_item_payment d-flex">
                    <img src="./img/images.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/visa.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/american_express.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/UnionPay.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/discoverk.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                    <img src="./img/JCB.jpg" alt="" srcset="" style = "height: 30px; width: 70px" class = "images_item_payment_body">
                  </div>
                  <form>
              <form class="row g-4">
                <div class="d-flex me-1">
                <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Số thẻ</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  <div class="form-body-item col-md-6 ms-3 ">
                    <label for="validationServer02" class="form-label">Tên chủ thẻ</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                </div>

                <div class="d-flex me-1 mt-6">
               
                <div class="form-body-item col-md-3 ms-3">
                    <label for="validationServer02" class="form-label">Ngày hết hạn</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                    
                  </div>

                  <div class="form-body-item col-md-3 ms-3 ">
                    <label for="validationServer02" class="form-label">Mã CVC</label>
                    <input type="text" class="form-control " id="validationServer02" value="" required>
                  </div>
                  
                </div>
              </form>
            </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row card mt-3 pe-3 pb-4 note">
            <h5 class="mt-3">Bạn cần thêm gì không?</h5>
            <form>
              <form class="row g-4">
                <p>Chúng tôi sẽ thông báo cho nơi lưu trú biết rằng bạn đang quan tâm đến các dịch vụ này, để họ có
                  thể cungcấp thông tin chi tiết và gửi cho bạn.</p>
                <div class="form-body-item col-md-11 ms-3 ">
                  <label for="validationServer02" class="form-label fw-lighter">Yêu cầu của bạn có thể không được đảm
                    bảo. Đừng lo! Chỗ nghỉ sẽ cố gắng sắp xếp cho bạn.</label>
                  <input type="text" class="form-control " id="validationServer02" value="Yêu cầu của bạn" required>
                </div>
              </form>
            </form>
          </div>
          <div class="row card mt-3 pe-3 pb-4 note1">
            <h5 class="mt-3">Lưu ý quan trọng cho thông tin đặt chỗ</h5>
            <form>
              <form class="row g-4">
                <div class="row card">
                  <p>- Nếu dự tính đến nơi sau 3PM 08/01/2022, vui lòng thông báo cho nhà cung cấp dịch vụ lưu trú về
                    thời gian nhận phòng dự kiến của bạn: Thứ Bảy, ngày 8 tháng 01 năm 2022.</p>
                  <div class="form-body-item form-floating col-md-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Tôi chưa biết</option>
                      <option value="1">00:00-01:00</option>
                      <option value="2">01:00-02:00</option>
                      <option value="2">02:00-03:00</option>
                      <option value="2">03:00-04:00</option>
                      <option value="2">04:00-05:00</option>
                      <option value="2">05:00-06:00</option>
                      <option value="2">06:00-07:00</option>
                      <option value="2">07:00-08:00</option>
                      <option value="2">08:00-09:00</option>
                      <option value="2">09:00-10:00</option>
                      <option value="2">10:00-11:00</option>
                      <option value="2">11:00-12:00</option>
                      <option value="2">12:00-13:00</option>
                      <option value="2">13:00-14:00</option>
                    </select>
                    <label for="floatingSelect">Thời gian</label>
                  </div>
                  <p>- Các dịch vụ khác có thể sẽ tính phí. Vui lòng liên hệ trước với nơi lưu trú để biết thêm thông
                    tin.</p>
                </div>
              </form>
            </form>
          </div>
          <div class="row card mt-2 note">

            <p>Tiếp tục thực hiện bước tiếp theo, tôi xác nhận đã xem và chấp thuận các <a href=""
                class="text-info">Điều khoản - Chính sách</a> và <a href="" class="text-info">Chính sách riêng tư</a>
              của Hahalolo </p>

          </div>
          <button type="button" class="btn_payment btn btn-info mt-3">Thanh toán</button>
        </div>
        <div class="right col-sm-4 mt-3">
          <div class="card">
            <h5 class="mt-3 card_titler">Thông tin phòng</h5>
            <img src="./img/hampton_inn.jpg" class="mt-3" alt="...">
            <div class="card-body">
              <b class="card_titler">HAMPTON INN UTICA NY</b>
              <form action="">

                <a class="text-info"
                  href="https://www.google.com/maps/place/172-180+N+Genesee+St,+Utica,+NY+13502,+Hoa+K%E1%BB%B3/@43.10939,-75.2193966,17z/data=!3m1!4b1!4m5!3m4!1s0x89d94713de3c298d:0x4bf524ca0cc367ca!8m2!3d43.1093114!4d-75.2170935">
                  172-180 N Genesee St, Utica, NY 13502, Hoa Kỳ</a>
              </form>
              <div class="text_item d-flex">
                <p style="width:70% ">Bạn đã chọn</p>
                <div>
                  <p> Phòng 1 King W/microwv/fridge Nonsmoke.Hdtv/free Wi-fi/hot Breakfast Included. </p>
                  <a href="./hotel_detail.php" style="font-size: 12px " class="text-info">Thay đổi lựa chọn</a>
                </div>

              </div>
              <div class="text_item d-flex">
                <p style="width:30% ">Nhận phòng</p>
                <p> Thứ 2, 10/01/2022</p>
              </div>
              <div class="text_item d-flex">
                <p style="width:30% ">Trả phòng </p>
                <p>Thứ 3, 11/01/2022</p>
              </div>
              <div class="text_item d-flex">
                <p style="width:30% ">Khách lưu trú</p>
                <p> 1 người lớn</p>
              </div>
              <a href="" style="display: block; margin-left: auto" class=" text-info text-end ">Điều kiện và chính
                sách</a>
            </div>
          </div>
          <div class="card mt-3">
            <h5 class="mt-3 card_titler">Chi tiết giá phòng của bạn</h5>
            <div class="card-body">
              <div class="text_bodẻ_item border rounded-3 d-flex " style="margin-left: 10px; margin-right: 10px">
                <p class="p_item" style="width:60%; padding-left: 30px ">1xPhòng</p>
                <div class="text_item_price">
                  <p style="font-size: 12px"> (Giá 1 phòng, 1 đêm)</p>
                  <p>3.073.950 ₫</p>
                </div>
              </div>
              <div class="text_item d-flex text-info">
                <p style="width:80% ">Thuế và phí</p>
                <p> 413.276đ</p>
              </div>
              <div class="text_item d-flex">
                <p style="width:80% ">Phí thanh toán</p>
                <p>0đ</p>
              </div>
              <div class="text_item d-flex">
                <p style="width:80% ">Tổng thanh toán</p>
                <h6> 3.418.916đ</h6>
              </div>
              <div class="text_item d-flex">
                <p style="width:80% ">Tiền tệ của chỗ nghỉ</p>
                <p>150.15$</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>

</body>

</html>