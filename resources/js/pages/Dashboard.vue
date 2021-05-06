<template>
  <div class="box-border flex flex-row w-min h-screen overflow-hidden transition duration-300 ease-in-out transform lg:w-screen" :class=" [ this.options.smSidebarOpened ? 'translate-x-0' : '-translate-x-80-vw lg:translate-x-0' ] ">
    <div class="w-80-vw bg-black h-full lg:w-xl">
      <!-- Start Left navigation -->
      <nav class="text-3xl text-white flex flex-col justify-between h-full overflow-y-auto">
        <div>
          <div class="w-full h-80 flex items-center justify-center p-10">
            <img :src="asset('assets/logo.png')" alt="" />
          </div>
          <div>
            <ul>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class="[this.options.activeNavbarItemData == 'dashboard' ? 'bg-primary bg-opacity-25 border-primary' : 'border-transparent']" @click="changeActiveNavbarItem('dashboard')">
                    <view-dashboard-outline/>
                    <span class="ml-8 font-semibold">Dashboard</span>
                </button>
              </li>
              <li class="z-50">
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class="[this.options.activeNavbarItemData == 'category' ? 'bg-primary bg-opacity-25 border-primary' :  'border-transparent']" @click="changeActiveNavbarItem('category')">
                    <shape />
                    <span class="ml-8 font-normal">Categories</span>
                </button>
              </li>
             <li class="group">
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" 
                        :class=" [ (this.options.activeNavbarItemData == 'product' || this.options.activeNavbarItemData == 'create-product' || this.options.activeNavbarItemData == 'all-products') ? 'bg-primary bg-opacity-25 border-primary' : 'border-transparent' ]" 
                        @click="changeActiveNavbarItem('product')">
                  <tag-outline />
                  <span class="ml-8 font-normal">Products</span>
                </button>
                <div class="transform -translate-x-full z-0 h-0 opacity-0 group-hover:translate-x-0 group-hover:h-auto group-hover:opacity-100">
                  <ul class="w-full py-4">
                    <li>
                      <button class="text-left w-full px-20 pl-36 h-20 hover:bg-opacity-25 hover:bg-primary" @click="changeActiveNavbarItem('create-product')">
                        <span class="whitespace-nowrap">Create Product</span>
                      </button>
                    </li>
                    <li>
                      <button class="text-left w-full px-20 pl-36 h-20 hover:bg-opacity-25 hover:bg-primary" @click="changeActiveNavbarItem('all-products')">
                        <span>All Products</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class=" [this.options.activeNavbarItemData == 'user' ? 'bg-primary bg-opacity-25 border-primary' :  'border-transparent' ]" @click="changeActiveNavbarItem('user')">
                  <account-multiple-outline />
                  <span class="ml-8 font-normal">Users</span>
                </button>
              </li>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class=" [this.options.activeNavbarItemData == 'order'?'bg-primary bg-opacity-25 border-primary' :  'border-transparent']" @click="changeActiveNavbarItem('order')">
                  <cart-outline />
                  <span class="ml-8 font-normal">Orders</span>
                </button>
              </li>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class=" [this.options.activeNavbarItemData == 'store' ?'bg-primary bg-opacity-25 border-primary' :  'border-transparent' ]" @click="changeActiveNavbarItem('store')">
                  <store-outline />
                  <span class="ml-8 font-normal">Stores</span>
                </button>
              </li>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class="[this.options.activeNavbarItemData == 'other' ? 'bg-primary bg-opacity-25 border-primary' :  'border-transparent' ]" @click="changeActiveNavbarItem('other')">
                  <view-split-horizontal />
                  <span class="ml-8 font-normal">Others</span>
                </button>
              </li>
              <li>
                <button class="w-full flex items-center h-20 px-20 border-r-4 hover:bg-primary hover:bg-opacity-25" :class="[this.options.activeNavbarItemData == 'setting' ?'bg-primary bg-opacity-25 border-primary' :  'border-transparent' ] " @click="changeActiveNavbarItem('setting')">
                  <cog-outline />
                  <span class="ml-8 font-normal">Settings</span>
                </button>
              </li> 
            </ul>
          </div>
        </div>
        <div class="mt-12 pb-10">
          <ul>
            <li>
              <button class="w-full flex items-center h-20 px-20 border-r-4 border-transparent text-error">
                <power />
                <span class="ml-8 font-medium">Logout</span>
              </button>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Left navigation -->
    </div>
    <div class="text-white bg-black2 w-screen h-full">
      <div class="bg-black bg-opacity-50">
        <header class="px-8 h-28 flex flex-row justify-between items-center relative z-50">
          <div class="flex flex-row items-center">
            <button class="mr-10 z-50" @click="this.toggleSidebarSMOpening">
              <menu-icon />
            </button>
            <div class="w-full h-20 hidden md:block">
              <!-- Global Search -->
              <form class="flex flex-row items-center h-full">
                <input type="text" class="h-full w-96 bg-transparent text-2xl font-normal border-transparent" placeholder="Search ...">
              </form>
            </div>
          </div>
          <div class="flex flex-row items-center ml-20 z-50">
            <button class="ml-8 relative md:hidden" @click="this.toggleSearchSMOpening">
              <close class="text-error" :class="{'hidden' : !this.options.smSearchOpened}"/>
              <magnify :class="{'hidden' : this.options.smSearchOpened}" />
            </button>
            <button class="ml-8 relative">
              <plus-box-outline />
            </button>
            <button class="ml-8 relative">
              <span class="w-3 h-3 bg-primary block rounded-full absolute right-0 top-0 -mt-1 -mr-1"></span>
              <bell-outline />
            </button>
            <button class="flex flex-row items-center text-2xl font-medium ml-16">
              <span class="whitespace-nowrap">Hi, Taftadjani</span>
              <img :src="asset('assets/avatars/profile.jpeg')" alt="" class="w-14 h-14 object-cover rounded-full ml-6">
            </button>
          </div>
        </header>
          <div class="bg-black absolute px-8 z-0 w-full h-20 transition duration-200 ease-in-out md:hidden" :class="[ this.options.smSearchOpened ? 'top-28' : '-top-28' ]">
            <!-- Global Search -->
            <form class="flex flex-row items-center h-full">
              <input type="text" class="h-full w-full bg-transparent text-2xl font-normal border-transparent" placeholder="Search ...">
              <button type="submit" class="ml-4">submit</button>
            </form>
          </div>
      </div>
      <div class="box-border h-full">
        <main class="p-8 w-full h-full">
          <div v-if="this.options.activeNavbarItemData=='dashboard'">Dashboard</div> 
          <div v-if="this.options.activeNavbarItemData=='category'">Categories</div>
          <div v-if="this.options.activeNavbarItemData=='product'">Products</div>
          <div v-if="this.options.activeNavbarItemData=='create-product'">Create Product</div>
          <div v-if="this.options.activeNavbarItemData=='all-products'">All Products</div>
          <div v-if="this.options.activeNavbarItemData=='user'">Users</div>
          <div v-if="this.options.activeNavbarItemData=='order'">Orders</div>
          <div v-if="this.options.activeNavbarItemData=='store'">Stores</div>
          <div v-if="this.options.activeNavbarItemData=='other'">Others</div>
          <div v-if="this.options.activeNavbarItemData=='setting'">Settings</div>
        </main>
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>

<script>
export default {
  props: {
    activeNavbarItem: {
      type: String,
      required: true, 
      default: 'dashboard',
    },
  },

  data() {
    return {
      options: {
        smSidebarOpened: false,
        smSearchOpened: false, 
        activeNavbarItemData: this.activeNavbarItem,
      }
    };
  },

  methods:{
    toggleSidebarSMOpening: function() {
      this.options.smSidebarOpened = !this.options.smSidebarOpened;
    },
    toggleSearchSMOpening: function() {
      this.options.smSearchOpened = !this.options.smSearchOpened;
    },
    changeActiveNavbarItem: function(item) {
      this.options.activeNavbarItemData = item;
    },
  },

  computed: {},
};
</script>