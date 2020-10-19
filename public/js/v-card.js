Vue.component('v-card', {
     props: {
         url: String,
         ajaxUrl: String
     },
     data() {
         return {
             card: {}
         }
     },
     computed: {
         hasCard() {
 
             return (Object.keys(this.card).length > 0);
 
         },
         thumbnailStyle() {
 
             const thumbnailUrl = this.card.thumbnail_url;
             return {
                 height: '100%',
                 backgroundImage: `url(${thumbnailUrl})`,
                 backgroundRepeat: 'no-repeat',
                 backgroundSize: 'cover',
                 backgroundPosition: 'center center'
             }
 
         }
     },
     mounted() {
 
         if(this.ajaxUrl !== '') {
 
             const params = { url: this.url };
             axios.post(this.ajaxUrl, params)
                 .then(response => {
 
                     if(response.data.result === true) {
 
                         this.card = response.data.card;
 
                     }
 
                 });
 
         }
 
     },
     template: `
         <div class="border rounded" style="text-decoration:none;" v-if="hasCard">
             <a :href="card.url" style="text-decoration:none !important;color:#333;" target="_blank">
                 <div class="row">
                     <div class="col-4 pr-0">
                         <div :style="thumbnailStyle" class="rounded-left border-right"></div>
                     </div>
                     <div class="col-8 pl-0">
                         <div class="px-3 py-2">
                             <div class="font-weight-bold mb-1" v-text="card.title"></div>
                             <div class="mb-1" v-if="card.description">
                                 <small v-text="card.description"></small>
                             </div>
                             <div class="mb-1" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;" v-if="card.url">
                                 <small class="text-secondary" v-text="card.url"></small>
                             </div>
                         </div>
                     </div>
                 </div>
             </a>
         </div>
     `
 });