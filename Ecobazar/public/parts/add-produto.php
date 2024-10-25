

<div class="bg-model">
    <div class="model-content">

        <div class="checkout">
            <div class="row">
            <div class="col-75">
              <div class="container">
                <form action="../app/include/produto.inc.php" method="POST" enctype="multipart/form-data">
          
                  <div class="row">
                    <div class="col-50">

                        <div class="top">
                            <i class='close bx bx-x-circle'></i>
                            <h5>Detalhes do produto</h5>
                        </div>
                        
        
                      <div class="row">
                        <div class="col-50">
                          <label for="state">Nome*</label>
                          <input type="text" name="nome" id="nome"  maxlength="50" placeholder="nome">
                        </div>
        
                        <div class="col-50">
                          <label for="zip">Preço*</label>
                          <input type="number" name="price" id="price" step="0.01" placeholder="price">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-50">
                          <label for="state">Quantidade*</label>
                          <input type="number" name="stock" id="stock" min="10" value="10" placeholder="stock">
                        </div>
        
                        <div class="col-50">
                          <label for="zip">Fornecedor*</label>
                          <input type="text" name="fornecedor" id="fornecedor" placeholder="fornecedor" >
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-50">
                          <label for="state">Marca*</label>
                          <input type="text" name="marca" id="marca" placeholder="marca">
                        </div>
                        
                        <div class="col-50">
                          <label for="zip">Imagem</label>
                          <input type="file" name="image" id="image" placeholder="image" accept="image/*">
                        </div>
                      </div>
        
                      <label>Descrição*</label>
                      <textarea type="text" name="descricao" id="descricao" placeholder="descricao"></textarea >

                      
                    </div>
          
                  </div>
                  <input type="submit" value="Adicionar" class="btn">

                </form>
              </div>
            </div>
            
          </div>
        </div>
    </div>
      
</div>


