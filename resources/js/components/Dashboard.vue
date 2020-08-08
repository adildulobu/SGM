<template>
     <div class="container-fluid">
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p  class="text-card">Produtos</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>
                <p  class="text-card">Categorias</p>
              </div>
              <div class="icon">
                <i class="fas fa-th"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 class="text-card-color">44</h3>
                <p  class="text-card text-card-color">Fornecedores</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-user-friends"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p  class="text-card">Vendas</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
        </div>
     </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
.text-card{
    font-size: 15px;
    font-weight: bold;
}
.text-card-color{
    color: white;
}
.icon{
    color: white;
}
</style>