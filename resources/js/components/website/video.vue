<template>
  <div>
      <h3 class="page-title">Quản lý video</h3>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" >
              <div class="row" v-for="(item, key) in objData" :key="key">
                <div class="col-md-3">
                  <div class="form-group">
                    <image-upload type="avatar" v-model="item.image" :title="'video-'"></image-upload>
                  </div>
                </div>
             
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Tên video</label>
                    <label style="float: right;cursor: pointer" title="Xóa video" v-if="key != 0" @click="removeObjPartner(key)">
                      <vs-icon icon="clear"></vs-icon>
                    </label>
                    <vs-input
                      type="text"
                      v-model="item.name"
                      size="default"
                      placeholder="Tên video"
                      class="w-100"
                    />
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <vs-input
                      type="text"
                      v-model="item.link"
                      size="default"
                      placeholder="Link liên kết với video (bỏ trống nếu không có)"
                      class="w-100"
                    />
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Trạng thái</label>
                        <vs-select v-model="item.status">
                          <vs-select-item  value="1" text="Hiện" />
                          <vs-select-item  value="0" text="Ẩn" />
                        </vs-select>
                      </div>
                      <div class="col-md-4">
                        <label>Danh mục</label>
                        <vs-select v-model="item.cate_slug" placeholder="Danh mục">
                          <vs-select-item  value="danh-gia-khach-hang" text="Video đánh giá khách hàng" />
                          <vs-select-item  value="danh-gia-chuyen-gia" text="Video đánh giá của chuyên gia" />
                          <vs-select-item  value="tung-san-pham" text="Video về từng sản phẩm" />
                        </vs-select>
                      </div>
                      <div class="col-md-4">
                        <label>Thuộc sản phẩm</label>
                        <vs-select v-model="item.product_id" placeholder="Sản phẩm">
                          <vs-select-item 
                          :value="tem.id"
                          :text="JSON.parse(tem.name)[0].content"
                          v-for="(tem,index) in products"
                          :key="'f'+index" />
                        </vs-select>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <hr style="border: 0.5px solid #04040426; width: 100%;">
              </div>
              <vs-button color="primary" @click="saveVideos">Lưu</vs-button>
              <vs-button color="success" @click="addObjPartner">Thêm video</vs-button>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import { required } from "vuelidate/lib/validators";
export default {
  name: "prize",
  data() {
    return {
      products: [],
      objData:[
        {
          name:"",
          image: "",
          status:"",
          link:"",
          cate_slug: "danh-gia-khach-hang",
          product_id: "",
        }
      ] 
    };
  },
  components: {},
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["saveVideo", "loadings","listVideo","listProduct"]),
    saveVideos(){
      this.loadings(true);
      this.saveVideo({data:this.objData}).then(response => {
        this.loadings(false);
        this.$success('Thêm video thành công');
      }).catch(error => {
        this.loadings(false);
        this.$error('Thêm video thất bại');
      })
    },
    addObjPartner(){
      this.objData.push({
          name:"",
          image: "",
          status:"",
          link:"",
          cate_slug: "danh-gia-khach-hang",
          product_id: "",
        });
    },
    removeObjPartner(i){
      this.objData.splice(i, 1);
    },
    listBanners(){
      this.loadings(true);
      this.listVideo().then(response => {
        this.loadings(false);
        if(response.data.length > 0){
          this.objData = response.data
        }else{
          this.objData = [
            {
              name:"",
              image: "",
              status:"",
              link:"",
              cate_slug: "danh-gia-khach-hang",
              product_id: "",
            }
          ]
        }
        
      }).catch(error => {
        this.loadings(false);;
      })
    },
    getProducts() {
      this.listProduct(). then( response => {
        this.products = response.data;
      })
    }
  },
  mounted() {
    this.listBanners();
    this.getProducts();
  }
};
</script>