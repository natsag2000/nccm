<template>
  <div class="container page">
    <div v-html="pageContent" class="mx-4" />
    <p class="mx-4">
      Хэрэв та Хавдрын үндэсний зөвлөлийн сайн дурын ажилтан болоох хүсэлтэй бол
      <a class="outline-none" href="Sain_durin_ajiltni_talar_barimtlah_bodlogo.pdf" target="_blank">
        <span class="text-lg text-red-600">“Сайн дурын ажилтны талаар баримтлах бодлого”-ыг</span> эндээс дарж уншина уу.
      </a>
    </p>
    <p class="mx-4">
      “Сайн дурын ажилтны талаар баримтлах бодлого”-ыг уншаад зөвшөөрч байгаа бол
      <a class="outline-none text-lg text-red-600" href="https://docs.google.com/forms/d/1nskvv_Tgf27jc9c4fI1PV2eDe62yKj1NFGwmmAgy88M/edit" target="_blank">
        энд дарж “Цахим анкет”-ыг бөглөж бидэнд ирүүлнэ үү
      </a>
    </p>
    <p class="mx-4">
      Таны ирүүлсэн мэдээлэлд үндэслэн ямар ажлуудыг хийж болох талаар тантай эргэн холбогдох болно.
    </p>
  </div>
</template>

<script>
import mdContent from '~/static/content/sain-duriin-ajiltan.md'
export default {
  computed: {
    pageContent () {
      return mdContent
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex flex-col mx-auto;
  }
  .page ul {
    list-style-type: circle;
    list-style-position: inside;
  }

</style>
