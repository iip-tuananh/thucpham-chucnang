<template>
  <div>
      <h3 class="page-title">Cài đặt chung</h3>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" >
                <div class="form-group">
                  <label>Tên doanh nghiệp</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.company"
                  />
                </div>
                <div class="form-group">
                  <label>Tên website</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.webname"
                  />
                </div>
                <div class="form-group">
                  <label>Văn phòng tại Hà Nội</label>
                  <div v-for="(item, index) in objData.address1" :key="index">
                  <div class="row">
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Tên văn phòng (nếu có)"
                        class="w-100"
                        v-model="objData.address1[index].name"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Mã văn phòng (nếu có)"
                        class="w-100"
                        v-model="objData.address1[index].name_code"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Số điện thoại"
                        class="w-100"
                        v-model="objData.address1[index].phone_number"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Địa chỉ"
                        class="w-100"
                        v-model="objData.address1[index].address"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Ghi chú (nếu có)"
                        class="w-100"
                        v-model="objData.address1[index].note"
                      />
                    </div>
                    <div class="col-2">
                      <a
                        href="javascript:;"
                        v-if="index != 0"
                        @click="remoteAr(index,'address1')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                    </div>
                  </div><br>
                  </div>
                  <el-button size="small" @click="addInput('address1')"
                  >Thêm địa chỉ tại Hà Nội</el-button>
                </div>
                <div class="form-group">
                  <label>Địa chỉ tại Quảng Châu</label>
                  <div v-for="(item, index) in objData.address2" :key="index">
                  <div class="row">
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Tên văn phòng (nếu có)"
                        class="w-100"
                        v-model="objData.address2[index].name"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="收货名 (nếu có)"
                        class="w-100"
                        v-model="objData.address2[index].name_code"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="电话"
                        class="w-100"
                        v-model="objData.address2[index].phone_number"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="收货地址"
                        class="w-100"
                        v-model="objData.address2[index].address"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="请标注外箱大写 (nếu có)"
                        class="w-100"
                        v-model="objData.address2[index].note"
                      />
                    </div>
                    <div class="col-2">
                      <a
                        href="javascript:;"
                        v-if="index != 0"
                        @click="remoteAr(index,'address2')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                    </div>
                  </div><br>
                  </div>
                  <el-button size="small" @click="addInput('address2')"
                  >Thêm địa chỉ tại Quảng Châu</el-button>
                </div>
                <div class="form-group">
                  <label>Địa chỉ tại Bằng Tường</label>
                  <div v-for="(item, index) in objData.address3" :key="index">
                  <div class="row">
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="Tên văn phòng (nếu có)"
                        class="w-100"
                        v-model="objData.address3[index].name"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="收货名 (nếu có)"
                        class="w-100"
                        v-model="objData.address3[index].name_code"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="电话"
                        class="w-100"
                        v-model="objData.address3[index].phone_number"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="收货地址"
                        class="w-100"
                        v-model="objData.address3[index].address"
                      />
                    </div>
                    <div class="col-10">
                      <vs-input
                        type="text"
                        size="default"
                        placeholder="请标注外箱大写 (nếu có)"
                        class="w-100"
                        v-model="objData.address3[index].note"
                      />
                    </div>
                    <div class="col-2">
                      <a
                        href="javascript:;"
                        v-if="index != 0"
                        @click="remoteAr(index,'address3')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                    </div>
                  </div><br>
                  </div>
                  <el-button size="small" @click="addInput('address3')"
                  >Thêm địa chỉ tại Bằng Tường</el-button>
                </div>
                <div class="form-group">
                  <label>Số hotline 1</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone1"
                  />
                </div>
                <div class="form-group">
                  <label>Số hotline 2</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone2"
                  />
                </div>
                <div class="form-group">
                  <label>Fax</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.fax"
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.email"
                  />
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.facebook"
                  />
                </div>
                <div class="form-group">
                  <label>Google</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.google"
                  />
                </div>
                <div class="form-group">
                  <label>Code Google analytics</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.GA"
                  />
                </div>
                <div class="form-group">
                  <label>Iframe GG map</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.iframe_map"
                  />
                </div>
                <div class="form-group">
                  <label>Favicon</label>
                  <image-upload type="avatar" v-model="objData.favicon" :title="'favicon'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Logo</label>
                  <image-upload type="avatar" v-model="objData.logo" :title="'logo'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Ảnh Popup</label>
                  <image-upload type="avatar" v-model="objData.popupimage" :title="'popupimage'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Link Popup</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.linkpopup"
                  />
                </div>
                <div class="form-group">
                  <label>Trạng thái hiển thị popup</label>
                  <vs-select v-model="objData.statusPopup"
                  >
                      <vs-select-item  value="1" text="Hiện" />
                      <vs-select-item  value="0" text="Ẩn" />
                    </vs-select>
                </div>
              <vs-button color="primary" @click="saveSetting">Lưu</vs-button>
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
import TinyMce from "../_common/tinymce";
export default {
  name: "setting",
  data() {
    return {
      joke: {
        avatar: "delete-sign--v2.png",
      },
      objData:
        {
            webname : "",
            company : "",
            address1: [
              {
                name: '',
                name_code: '',
                phone_number: '',
                address: '',
                note: '',
              }
            ],
            address2 : [
              {
                name: '',
                name_code: '',
                phone_number: '',
                address: '',
                note: '',
              }
            ],
            address3 : [
              {
                name: '',
                name_code: '',
                phone_number: '',
                address: '',
                note: '',
              }
            ],
            phone1 : "",
            phone2 : "",
            fax : "",
            email : "",
            facebook : "",
            google : "",
            GA : "",
            fbPixel : "",
            iframe_map : "",
            favicon : "",
            logo : "",
            footer_content:"",
            popupimage:"",
            statusPopup:1,
            linkpopup:""
        }
    };
  },
  components: {
    TinyMce
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["postSetting", "loadings","getSetting"]),
    saveSetting(){
      this.loadings(true);
      this.postSetting(this.objData).then(response => {
        this.loadings(false);
        this.$success('Cài đặt thành công');
      }).catch(error => {
        this.loadings(false);
        this.$error('Cài đặt thất bại');
      })
    },
    listSettings(){
      this.loadings(true);
      this.getSetting().then(response => {
        this.loadings(false);
        this.objData = response.data
        this.objData.address1 = JSON.parse(response.data.address1);
        this.objData.address2 = JSON.parse(response.data.address2);
        this.objData.address3 = JSON.parse(response.data.address3);
      }).catch(error => {
        this.loadings(false);;
      })
    },
    remoteAr(index,key) {
      if(key == 'address1'){
        this.objData.address1.splice(index, 1);
      }
      if(key == 'address2'){
        this.objData.address2.splice(index, 1);
      }
      if(key == 'address3'){
        this.objData.address3.splice(index, 1);
      }
        
    },
    addInput(key) {
        var oj = {};
        if(key =='address1'){
          oj.name = "";
          oj.name_code = "";
          oj.phone_number = "";
          oj.address = "";
          oj.note = "";
          this.objData.address1.push(oj);
        }
        if(key =='address2'){
          oj.name = "";
          oj.name_code = "";
          oj.phone_number = "";
          oj.address = "";
          oj.note = "";
          this.objData.address2.push(oj);
        }
        if(key =='address3'){
          oj.name = "";
          oj.name_code = "";
          oj.phone_number = "";
          oj.address = "";
          oj.note = "";
          this.objData.address3.push(oj);
        }
    },
  },
  mounted() {
    this.listSettings();
  }
};
</script>