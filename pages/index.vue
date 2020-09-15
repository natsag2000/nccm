<template>
  <div class="container">
    <div v-html="aboutUs" class="mx-4" />
    <!-- Projects -->
    <div class="flex-col mt-4">
      <span class="text-3xl mb-2">Бидний төслүүд</span>
      <div class="sm:flex sm:space-x-4">
        <Project
          title="Хавдартай өвчтөнүүдэд зориулсан байр байгуулах төсөл"
          image="projects/project1.jpg"
          content="Энэхүү төслийн зорилго нь хөдөө орон нутгийн хавдартай өвчтөнүүдийг нийслэл хотод эмчилгээ хийлгэх хугацаанд нь тохь тухтай байранд байрлуулах, өвчтөнүүдэд тусламж дэмжлэг үзүүлэх, өвчнөө даван туулах итгэл найдвар өгөхөд оршино.
          "
          link="project1"
        />
        <Project
          title="Залуу эмэгтэйчүүдийн дундах хүний хөхөнцөр вирүсийн тархалт болон мэдлэг, дадал, хандлагыг үнэлэх судалгаа"
          image="projects/project2.jpg"
          content="Умайн хүзүүний хорт хавдар нь Монгол улсад эмэгтэйчүүдэд түгээмэл тохиолддог хорт хавдрын хоёрдугаарт ордог. Умайн хүзүүний хорт хавдрын зонхилон тохиолддог шалтгаан нь хүний хөхөнцөр вирүс (ХХВ) юм"
          link="project2"
        />
      </div>
      <div class="sm:flex sm:space-x-4 mt-4">
        <Project
          title="Тээврийн хөтөлбөр"
          image="projects/project3.png"
          content="Хөдөө орон нутгаас нийслэл хотод эмчилгээнд ирдэг хавдартай өвчтөнүүдэд дэмжлэг үзүүлэх тээврийн хөтөлбөр 2018 оны 4 сараас хэрэгжиж  эхлээд байна.

          Хөтөлбөрт хамрагдах хүсэлтэй бол Хавдар судлалын үндэсний төвийн Нийгмийн ажилтанд (Я.Ариунболор, Утас:8903 3282, Ажлын цагаар холбогдоно уу, Ажлын цаг: 08:30-17:30) бүртгүүлнэ үү."
          link="project3"
        />
        <Project
          title="Бясалгалын хичээл"
          image="projects/project4.jpg"
          content="Хавдартай өвчтөнүүд, тэдгээрийн асран хамгаалагч нарт зориулсан бясалгалын хичээл.

          Их Хөлгөний уламжлалыг хадгалах сантай хамтран 2016 оны 1-р сарын 13-ны өдрөөс эхлэн Лхагва гараг бүрт үнэгүй зохион байгуулагдана."
          link="project4"
        />
      </div>
    </div>
    <div class="flex-col mt-8 bg-gray-200 text-center rounded-lg">
      <span class="text-3xl">Бидний хамтрагчид</span>
      <div class="flex flex-wrap space-x-8 space-y-4 mt-4 items-center justify-center">
        <Partner link="http://www.cancer-center.gov.mn" image="partner/partner1.png" />
        <Partner link="http://www.ehemut.mn" image="partner/partner2.png" />
        <Partner link="https://www.facebook.com/Mongolian-Software-Industry-Association-1416969731952988" image="partner/partner3.png" />
        <Partner link="http://www.themaxfoundation.org" image="partner/partner4.png" />
        <Partner link="http://www.uicc.org" image="partner/uicc_logo.png" />
        <Partner link="http://mongolia.embassy.gov.au/ulnb/home.html" image="partner/embassy-gov-au.jpg" />
        <Partner link="https://www.facebook.com/AustralasianHumanServices" image="partner/australasianHumanServices.jpg" />
        <Partner link="http://www.laurelfoundation.ca/" image="partner/laurelFoundation.jpg" />
        <Partner link="https://www.mcri.edu.au/" image="partner/murdoch.jpeg" />
        <Partner link="https://austchammongolia.com" image="partner/austchammongolia.webp" size="h-24" />
        <Partner link="https://www.uct.ac.za" image="partner/uct-ac-za.png" size="w-64" />
        <Partner link="https://www.cancerresearchuk.org/" image="partner/cruk-logo.svg" size="h-24" />
        <Partner link="https://www.stjude.org/" image="partner/stjudechildren.png" size="h-24" />
        <Partner link="https://www.fondation-sanofi-espoir.com/" image="partner/sanofi-espoir.png" size="h-18 bg-gray-400" />
        <Partner link="https://www.lionsclubs.org/en" image="partner/lionsclubs.svg" size="h-24" />
        <Partner link="https://www.gatesfoundation.org/" image="partner/bmgf-logo.webp" size="h-18 bg-gray-900" />
        <Partner link="https://www.cancer.org.au/" image="partner/CC_Logo.png" size="h-20" />
        <Partner link="https://www.facebook.com/pages/category/Non-Governmental-Organization--NGO-/Mongolian-Professional-Art-Therapy-Association-458008187934323/" image="partner/mongolian-art-therapy.png" size="h-32" />
        <Partner link="https://www.facebook.com/NCPHMongolia/" image="partner/ncphmongolia.png" size="h-24" />
        <Partner link="https://ubtz.mn/" image="partner/ubtz.png" size="h-20 bg-blue-700" />
      </div>
    </div>
  </div>
</template>

<script>
import aboutUs from '~/static/content/aboutUs.md'
import Project from '~/components/Project.vue'
import Partner from '~/components/Partner.vue'
export default {
  components: {
    Project,
    Partner
  },
  computed: {
    aboutUs () {
      return aboutUs
    }
  }
}
</script>

<style>
.container {
  @apply min-h-screen flex flex-col mx-auto;
}

</style>
