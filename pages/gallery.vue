<template>
  <div class="container">
    <div class="flex-col mt-4">
      <span class="text-3xl mb-2">Зургийн галерей</span>
      <div class="flex space-x-2 space-y-2 flex-wrap items-center justify-center">
        <img v-for="(item, index) in media" :key="index" @click="showGallery(index)" :src="item.thumb" class="h-16 cursor-pointer">
      </div>
      <LightBox v-if="show" :media="media" :startAt="showNum" @onClosed="closeGallery()" n-thumbs="13" />
    </div>
  </div>
</template>

<script>
import LightBox from 'vue-image-lightbox'
require('vue-image-lightbox/dist/vue-image-lightbox.min.css')

export default {
  components: {
    LightBox
  },
  data () {
    return {
      show: false,
      showNum: 0,
      media: [
        {
          thumb: 'gallery/thumbnails/20190316_152259.jpg',
          src: 'gallery/20190316_152259.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180607_212419.jpg',
          src: 'gallery/20180607_212419.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190221_122801.jpg',
          src: 'gallery/20190221_122801.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191106_103657.jpg',
          src: 'gallery/20191106_103657.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180427_194952.jpg',
          src: 'gallery/20180427_194952.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2276678875897908.jpeg',
          src: 'gallery/received_2276678875897908.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20200125_145851.jpg',
          src: 'gallery/20200125_145851.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC04589.JPG',
          src: 'gallery/DSC04589.JPG'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1517291355604.jpg',
          src: 'gallery/FB_IMG_1517291355604.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC02885.JPG',
          src: 'gallery/DSC02885.JPG'
        },
        {
          thumb: 'gallery/thumbnails/DSC03379.JPG',
          src: 'gallery/DSC03379.JPG'
        },
        {
          thumb: 'gallery/thumbnails/20190812_200550.jpg',
          src: 'gallery/20190812_200550.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180707_190707.jpg',
          src: 'gallery/20180707_190707.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20190425-WA0001.jpg',
          src: 'gallery/IMG-20190425-WA0001.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC04206.JPG',
          src: 'gallery/DSC04206.JPG'
        },
        {
          thumb: 'gallery/thumbnails/20171029_134318.jpg',
          src: 'gallery/20171029_134318.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190405_124145.jpg',
          src: 'gallery/20190405_124145.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190629_133531.jpg',
          src: 'gallery/20190629_133531.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.21.10.png',
          src: 'gallery/PicsArt_01-20-02.21.10.png'
        },
        {
          thumb: 'gallery/thumbnails/20181025_193911.jpg',
          src: 'gallery/20181025_193911.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1538276805820.jpg',
          src: 'gallery/FB_IMG_1538276805820.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1561812566789.jpg',
          src: 'gallery/FB_IMG_1561812566789.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_526610641176155.jpeg',
          src: 'gallery/received_526610641176155.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-b7669e781dd03349c38ce8abe867592b-V.jpg',
          src: 'gallery/IMG-b7669e781dd03349c38ce8abe867592b-V.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1559662389077.jpg',
          src: 'gallery/FB_IMG_1559662389077.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191105_195006.jpg',
          src: 'gallery/20191105_195006.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190627_191946.jpg',
          src: 'gallery/20190627_191946.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2021640694592634.jpeg',
          src: 'gallery/received_2021640694592634.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20190402_130233.jpg',
          src: 'gallery/20190402_130233.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190404_135208.jpg',
          src: 'gallery/20190404_135208.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190629_153201.jpg',
          src: 'gallery/20190629_153201.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190328_173830.jpg',
          src: 'gallery/20190328_173830.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190103_191059.jpg',
          src: 'gallery/20190103_191059.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180204_100449.jpg',
          src: 'gallery/20180204_100449.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1505460448244.jpg',
          src: 'gallery/FB_IMG_1505460448244.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_1958606024401514.jpeg',
          src: 'gallery/received_1958606024401514.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1549023707972.jpg',
          src: 'gallery/FB_IMG_1549023707972.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191107_100336.jpg',
          src: 'gallery/20191107_100336.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180501_155615.jpg',
          src: 'gallery/20180501_155615.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20170202_233530.jpg',
          src: 'gallery/20170202_233530.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20170624_120449.jpg',
          src: 'gallery/20170624_120449.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181219_091816.jpg',
          src: 'gallery/20181219_091816.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181009_113444.jpg',
          src: 'gallery/20181009_113444.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20170420_160446_001.jpg',
          src: 'gallery/20170420_160446_001.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC03246.JPG',
          src: 'gallery/DSC03246.JPG'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1527677535782.jpg',
          src: 'gallery/FB_IMG_1527677535782.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190629_132329.jpg',
          src: 'gallery/20190629_132329.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_432319037277028.jpeg',
          src: 'gallery/received_432319037277028.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1526632732815.jpg',
          src: 'gallery/FB_IMG_1526632732815.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1486041951641.jpg',
          src: 'gallery/FB_IMG_1486041951641.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181110_163217.jpg',
          src: 'gallery/20181110_163217.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190201_122302.jpg',
          src: 'gallery/20190201_122302.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1501382793616.jpg',
          src: 'gallery/FB_IMG_1501382793616.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.30.36.png',
          src: 'gallery/PicsArt_01-20-02.30.36.png'
        },
        {
          thumb: 'gallery/thumbnails/20190201_132515.jpg',
          src: 'gallery/20190201_132515.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2113738168652553.jpeg',
          src: 'gallery/received_2113738168652553.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20181231_194744.jpg',
          src: 'gallery/20181231_194744.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180423_224206(0).jpg',
          src: 'gallery/20180423_224206(0).jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191103_163104.jpg',
          src: 'gallery/20191103_163104.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC03669.JPG',
          src: 'gallery/DSC03669.JPG'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.18.33.png',
          src: 'gallery/PicsArt_01-20-02.18.33.png'
        },
        {
          thumb: 'gallery/thumbnails/20170418_161311_001.jpg',
          src: 'gallery/20170418_161311_001.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20190817-WA0003.jpg',
          src: 'gallery/IMG-20190817-WA0003.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180726_093032.jpg',
          src: 'gallery/20180726_093032.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1513557467633.jpg',
          src: 'gallery/FB_IMG_1513557467633.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191026_012108.jpg',
          src: 'gallery/20191026_012108.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.28.50.jpg',
          src: 'gallery/PicsArt_01-20-02.28.50.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190316_165849.jpg',
          src: 'gallery/20190316_165849.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1533901462354.jpg',
          src: 'gallery/FB_IMG_1533901462354.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1538276797720.jpg',
          src: 'gallery/FB_IMG_1538276797720.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180409_175516.jpg',
          src: 'gallery/20180409_175516.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20170831_152154.jpg',
          src: 'gallery/20170831_152154.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2256792114559669.jpeg',
          src: 'gallery/received_2256792114559669.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20191109_060645.jpg',
          src: 'gallery/20191109_060645.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180529_184523.jpg',
          src: 'gallery/20180529_184523.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_1833645630209028.jpeg',
          src: 'gallery/received_1833645630209028.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20191206_072153.jpg',
          src: 'gallery/20191206_072153.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190801_162010.jpg',
          src: 'gallery/20190801_162010.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2144971135530782.jpeg',
          src: 'gallery/received_2144971135530782.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20180108_161901.jpg',
          src: 'gallery/20180108_161901.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1568521025576.jpg',
          src: 'gallery/FB_IMG_1568521025576.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180621_110816.jpg',
          src: 'gallery/20180621_110816.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20171215-WA0000.jpg',
          src: 'gallery/IMG-20171215-WA0000.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20171102_170521.jpg',
          src: 'gallery/20171102_170521.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1509602329108.jpg',
          src: 'gallery/FB_IMG_1509602329108.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20170621_171804.jpg',
          src: 'gallery/20170621_171804.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20180923-WA0001.jpg',
          src: 'gallery/IMG-20180923-WA0001.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180514_173937.jpg',
          src: 'gallery/20180514_173937.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190316_164635.jpg',
          src: 'gallery/20190316_164635.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180823_153505.jpg',
          src: 'gallery/20180823_153505.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2010896065876427.jpeg',
          src: 'gallery/received_2010896065876427.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/received_2263358417007607.jpeg',
          src: 'gallery/received_2263358417007607.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20190217_155131.jpg',
          src: 'gallery/20190217_155131.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20171118_151040.jpg',
          src: 'gallery/20171118_151040.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_1743085442461690.jpeg',
          src: 'gallery/received_1743085442461690.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20190109_103056.jpg',
          src: 'gallery/20190109_103056.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190313_154245.jpg',
          src: 'gallery/20190313_154245.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180528_203108.jpg',
          src: 'gallery/20180528_203108.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20171121_210456.jpg',
          src: 'gallery/20171121_210456.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180118_152743.jpg',
          src: 'gallery/20180118_152743.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20171216_210112.jpg',
          src: 'gallery/20171216_210112.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190817_081504.jpg',
          src: 'gallery/20190817_081504.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.22.12.jpg',
          src: 'gallery/PicsArt_01-20-02.22.12.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2190363561184923.jpeg',
          src: 'gallery/received_2190363561184923.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20180815_175556.jpg',
          src: 'gallery/20180815_175556.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190405_152322.jpg',
          src: 'gallery/20190405_152322.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1534457628866.jpg',
          src: 'gallery/FB_IMG_1534457628866.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1504239605950.jpg',
          src: 'gallery/FB_IMG_1504239605950.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_733573176982493.jpeg',
          src: 'gallery/received_733573176982493.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20191106_125832.jpg',
          src: 'gallery/20191106_125832.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181005_185055.jpg',
          src: 'gallery/20181005_185055.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190810_124742(0).jpg',
          src: 'gallery/20190810_124742(0).jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181115_164931.jpg',
          src: 'gallery/20181115_164931.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2028221070537597.jpeg',
          src: 'gallery/received_2028221070537597.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20190802_195422.jpg',
          src: 'gallery/20190802_195422.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1508177013371.jpg',
          src: 'gallery/FB_IMG_1508177013371.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190327_182245.jpg',
          src: 'gallery/20190327_182245.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180719_183303.jpg',
          src: 'gallery/20180719_183303.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.44.47.png',
          src: 'gallery/PicsArt_01-20-02.44.47.png'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1514173877908.jpg',
          src: 'gallery/FB_IMG_1514173877908.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC04225.JPG',
          src: 'gallery/DSC04225.JPG'
        },
        {
          thumb: 'gallery/thumbnails/20180402_190852.jpg',
          src: 'gallery/20180402_190852.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20181008-WA0000.jpg',
          src: 'gallery/IMG-20181008-WA0000.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191111_142422.jpg',
          src: 'gallery/20191111_142422.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190925_181415.jpg',
          src: 'gallery/20190925_181415.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180307_152527.jpg',
          src: 'gallery/20180307_152527.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1559762945623.jpg',
          src: 'gallery/FB_IMG_1559762945623.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180516_140522.jpg',
          src: 'gallery/20180516_140522.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG_20190328_164657.jpg',
          src: 'gallery/IMG_20190328_164657.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_1734231636587889.jpeg',
          src: 'gallery/received_1734231636587889.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20180614_150438.jpg',
          src: 'gallery/20180614_150438.jpg'
        },
        {
          thumb: 'gallery/thumbnails/DSC03373.JPG',
          src: 'gallery/DSC03373.JPG'
        },
        {
          thumb: 'gallery/thumbnails/20180508_160045.jpg',
          src: 'gallery/20180508_160045.jpg'
        },
        {
          thumb: 'gallery/thumbnails/received_2177970169120464.jpeg',
          src: 'gallery/received_2177970169120464.jpeg'
        },
        {
          thumb: 'gallery/thumbnails/20170825_145533.jpg',
          src: 'gallery/20170825_145533.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1534457657778.jpg',
          src: 'gallery/FB_IMG_1534457657778.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180519_083531.jpg',
          src: 'gallery/20180519_083531.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20181001_173318.jpg',
          src: 'gallery/20181001_173318.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1526632744906.jpg',
          src: 'gallery/FB_IMG_1526632744906.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-20190428-WA0019.jpg',
          src: 'gallery/IMG-20190428-WA0019.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190115_085322.jpg',
          src: 'gallery/20190115_085322.jpg'
        },
        {
          thumb: 'gallery/thumbnails/PicsArt_01-20-02.38.17.jpg',
          src: 'gallery/PicsArt_01-20-02.38.17.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180529_130748.jpg',
          src: 'gallery/20180529_130748.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180902_153847.jpg',
          src: 'gallery/20180902_153847.jpg'
        },
        {
          thumb: 'gallery/thumbnails/FB_IMG_1505460474359.jpg',
          src: 'gallery/FB_IMG_1505460474359.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20180609_185454.jpg',
          src: 'gallery/20180609_185454.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20190108_222820.jpg',
          src: 'gallery/20190108_222820.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG-13dac6fbe28a60d7ff42a7433aa2e838-V.jpg',
          src: 'gallery/IMG-13dac6fbe28a60d7ff42a7433aa2e838-V.jpg'
        },
        {
          thumb: 'gallery/thumbnails/IMG_20190724_204207_724.jpg',
          src: 'gallery/IMG_20190724_204207_724.jpg'
        },
        {
          thumb: 'gallery/thumbnails/20191012_202649.jpg',
          src: 'gallery/20191012_202649.jpg'
        }
      ]
    }
  },
  methods: {
    showGallery (i) {
      this.showNum = i
      this.show = true
    },
    closeGallery () {
      this.show = false
    }
  }
}
</script>
<style>
  .container {
    @apply min-h-screen flex flex-col mx-auto;
  }
</style>
