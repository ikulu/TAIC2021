<script setup>
const props = defineProps({
    name: String,
    occupation: String,
    twitterLink: String,
    specialization: String,
    profileImgLink: String,
})
const imgPath = '/src/assets/img/guests/'
</script>

<template>
  <div>
   <div class="guest-card align-middle">
                <div class="guest ishonered">
                  <img
                    class="avatar-img isHonored"
                    :src="imgPath + props.profileImgLink"
                    :alt="props.name"
                  />
                </div>
              <div class="text-center">
              </div>
              <div>
                <div class="guest-name">{{ props.name }}</div>
                <div class="guest-attention">
                   <span>{{ props.occupation }}</span>
                </div>
                <div class="guest-attention">{{props.specialization }}</div>
              </div>
              <div class="twitter-link">
                <a :href="props.twitterLink">Twitter</a>
                <button @click.prevent="" class="btn btn-sm btn-primary">Geust Of Honour</button >
                  <a class="btn btn-outline-danger small m-1">Disable</a>
            </div>
            </div>
  </div>
</template>

<style scoped>
.guest img{
    width: 70px;
    height: 70px;
}
.isHonored {
    border: 4px solid gold;

}
.guest-card{
    background-color: rgba(47, 127, 201, 0.75);
    padding:.4rem 1.2rem;
    margin:.2rem ;
    border-radius: 1.2rem;
    color:white;
    font-size:medium;
}
.twitter-link {
    text-align: end;
    margin-right:2rem;
    border-radius: 1.2rem;
    font-size: larger;
}
.twitter-link a{
    margin: .2rem ;
    text-decoration: none;
    font-size: smaller;
    color:blanchedalmond;
}
.guest-attention{
    margin:.2rem;    
}
.guest-name {
    font-weight: 700;
}
.guest-attention span {
    color: rgb(24, 9, 68);
    font-size: larger;
    font-weight: 500;
}
</style>