<template>
  <div>
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
            <div class="form-group">
              <label>Tên chứng nhận</label>
              <vs-input
                type="text"
                size="default"
                placeholder="Tên"
                class="w-100"
                v-model="objData.name"
              />
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <TinyMce
                  v-model="objData.content[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('content')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.content == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <TinyMce v-if="index != 0" v-model="objData.content[index].content" />
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mô tả ngắn</label>
                <TinyMce
                  v-model="objData.description[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('description')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.description == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <TinyMce v-if="index != 0" v-model="objData.description[index].content" />
                    </div>
                </div>
              </div>
              <div class="form-group">
              <label>Ảnh chứng nhận</label>
                <!-- <ImageMulti v-model="objData.image" :title="'service-'"/>  -->
              <image-upload
                v-model="objData.image"
                type="avatar"
                :title="'service-'"
              ></image-upload>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label>Danh mục chứng nhận</label>
              <vs-select v-model="objData.cate_id" placeholder="Danh mục">
                <vs-select-item 
                :value="item.id"
                :text="JSON.parse(item.name)[0].content"
                v-for="(item,index) in cate"
                :key="'f'+index" />
              </vs-select>
            </div>
            <!-- <div class="form-group">
              <label>Loại chứng nhận</label>
              <vs-select v-model="objData.type_id" placeholder="Loại">
                <vs-select-item 
                :value="item.id"
                :text="JSON.parse(item.name)[0].content"
                v-for="(item,index) in type_cate"
                :key="'f'+index" />
              </vs-select>
            </div> -->
            <div class="form-group">
              <label>Trạng thái</label>
              <vs-select v-model="objData.status">
                <vs-select-item value="1" text="Hiện" />
                <vs-select-item value="0" text="Ẩn" />
              </vs-select>
            </div>
            <!-- <div class="form-group">
                <label>Chứng nhận liên quan</label>
                <vs-select
                  placeholder="Chứng nhận"
                  multiple
                  class="selectExample w-100"
                  v-model="objData.product_id"
                  >
                  <vs-select-item :key="index" :value="item.id" :text="JSON.parse(item.name)[0].content" v-for="(item,index) in products" />
                </vs-select>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row fixxed">
      <div class="col-12">
        <div class="saveButton">
          <vs-button color="primary" @click="addServices">Thêm mới</vs-button>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import TinyMce from "../_common/tinymce";
import ImageMulti from "../_common/upload_image_multi";
export default {
  name: "product",
  data() {
    return {
      errors: [],
      cate: [],
      products: [],
      type_cate: [],
      lang: [],
      showLang: {
        title: false,
        content: false,
        description: false,
      },
      objData: {
        name: "",
        content: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        description: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        status: 1,
        image: "",
        cate_id : 0,
        type_id: 0,
        product_id: []
      },
    };
  },
  components: {
    TinyMce,
    ImageMulti,
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions([
      "addService",
      "loadings",
      "listLanguage",
      "listServiceCategory",
      "listProduct"
    ]),
    listLang() {
      this.listLanguage()
        .then((response) => {
          this.loadings(false);
          this.lang = response.data;
        })
        .catch((error) => {});
    },
    showSettingLangExist(value, name = "content") {
      if (value == "name") {
        this.showLang.title = !this.showLang.title;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.name[index] &&
            value.code != this.objData.name[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.name.push(oj);
          }
        });
      }
      if (value == "content") {
        this.showLang.content = !this.showLang.content;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.content[index] &&
            value.code != this.objData.content[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.content.push(oj);
          }
        });
      }
      if (value == "description") {
        this.showLang.description = !this.showLang.description;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.description[index] &&
            value.code != this.objData.description[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.description.push(oj);
          }
        });
      }
    },
    addServices() {
      this.errors = [];
      if (this.objData.name == "") this.errors.push("Tên không được để trống");
      if (this.objData.image == "") this.errors.push("Vui lòng chọn ảnh");
      if(this.objData.content[0].content == '') this.errors.push('Nội dung không được để trống');
      if(this.objData.description[0].content == '') this.errors.push('Mô tả không được để trống');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value);
        });
        return;
      } else {
        this.loadings(true);
        this.addService(this.objData)
          .then((response) => {
            this.loadings(false);
            this.$router.push({ name: "listService" });
            this.$success("Thêm chứng nhận thành công");
          })
          .catch((error) => {
            this.loadings(false);
            this.$error("Thêm chứng nhận thất bại");
          });
      }
    },
    getCategory() {
      this.listServiceCategory().then(response => { 
        this.cate = response.data; 
      })
    },
    getProducts() {
      this.listProduct().then(response => { 
        this.products = response.data; 
      })
    },
    getType() {
      this.listServiceType(). then( response => {
        this.type_cate = response.data;
      })
    }
  },
  mounted() {
    this.listLang();
    this.getCategory();
    this.getProducts();
    this.getType();
  },
};
</script>