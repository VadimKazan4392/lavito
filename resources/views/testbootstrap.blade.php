@extends('layouts.app')

@section('content')
  <div class="container mt-5">
      <div class="container-fluid">
        <section class="dark-grey-text">
            <h2 class="text-center font-weight-bold mb-4 pb-2">Готовь бабло</h2>
            <p class="text-center mx-auto w-responsive mb-5">Сервис расчета будущих расходов</p>
            <div class="row align-items-center">
              <div class="col-lg-5 col-xl-4">
                <div class="view overlay rounded z-depth-1-half mb-md-0 mb-4">
                  <img class="img-fluid" src="https://polvamvdom.ru/f/product/cosmo_delta.jpg" style="max-width:200px" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-7 col-xl-8">
                  <table class="table">
                      <thead>
                          <tr>
                              <td>Категория</td>
                              <td>Название</td>
                              <td>Закладываемая стоимость</td>
                              <td>Фактическая стоимость</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>&nbsp;</td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Ламинат</td>
                              <td>westerhof cosmo delta</td>
                              <td>100</td>
                              <td>999999</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>
            <hr class="my-5">
          </section>
      </div>
    
  </div>
@endsection