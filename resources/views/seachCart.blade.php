@include('head');
@include('headerw');
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">


                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search2">
                        <i class="zmdi zmdi-search"></i>
                    </div>


                  <table class="table">
                      <thead>
                      <tr>
                          <th>Tên Khách Hàng</th>
                          <th>Số Điện Thoại</th>
                          <th>Email</th>
                          <th>Ngày Đặt hàng</th>
                          <th style="width: 100px">&nbsp;</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($customers as $key => $customer)
                          <tr>
                              <td>{{ $customer->name }}</td>
                              <td>{{ $customer->phone }}</td>
                              <td>{{ $customer->email }}</td>
                              <td>{{ $customer->created_at }}</td>
                              <td>
                                  <!-- <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-sm"
                                    onclick="removeRow({{ $customer->id }}, '/admin/customers/destroy')">
                                      <i class="fas fa-trash"></i>
                                  </a> -->
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>



</div></div></div>




    <!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search2">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search2">
					<img src="template/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>

    @include('script')