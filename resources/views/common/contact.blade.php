<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3><span>Để biết thêm thông tin chi tiết</span></h3>
            <p>Vui lòng nhập thông tin chi tiết của bạn và chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất</p>
        </div>

        <form id="contact_form" role="form" class="php-email-form" >
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên"
                           required>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form-group">
                    <input type="text" name="phone" class="form-control" id="phone_number"
                           placeholder="Số điện thoại"
                           required>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form-group">
                    <input type="email" class="form-control" name="email" id="email"
                           placeholder="Email" required>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form-group">
                    <select name="subject" id="subject" class="form-control">
                        <option value="" disabled selected hidden>Chủ đề</option>
                        <option value="{{\App\Enums\Subject::SALES}}">Bán hàng</option>
                        <option value="{{\App\Enums\Subject::CUSTOMER_SUPPORT}}">Hỗ trợ khách hàng</option>
                        <option value="{{\App\Enums\Subject::PARTNER_SHIP}}">Quan hệ đối tác</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Nội dung tin nhắn"
                                      required></textarea>
            </div>
            <div class="my-3">
                <div class="error-message  text-center">Tin nhắn của bạn chưa được gửi vui lòng đảm bảo mọi thông tin là chính xác</div>

                    <div class="sent-message">Tin nhắn của bạn đã được gửi đi. Xin cảm ơn!</div>



            </div>
            <div class="text-center">
                <button class="btn_submit_form_contact btn btn-primary" type="submit">Gửi</button>
            </div>
        </form>

    </div>
</section><!-- End Contact Section -->

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 5,
                },
                phone: {
                    required: true,
                },
                email: {
                    required: true,
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Họ tên không được bỏ trống',
                    minlength: 'Yêu cầu tối thiếu từ 5 ký tự trở lên',
                },
                phone: {
                    required: 'Số điện thoại không được bỏ trống',
                },
                email: {
                    required: 'Email không được bỏ trống',
                },
                message: {
                    required: 'Vui lòng để lại lời nhắn',
                },
            }
        })

        $('#contact_form').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{route('create_contact')}}",
                method: "POST",
                data: new FormData(this),
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    if (res.code === 200){
                        $('.sent-message').text(res.message)
                        $('.sent-message').addClass('d-block')
                        document.getElementById('contact_form').reset()
                    }else {
                        // $('.error-message').text(res.message)
                        $('.error-message').addClass('d-block')
                    }

                }
            })
        })



    });



</script>
