<template>
    <div>
        <a><div :id="svgId" class="svg-container"></div></a>
    </div>
</template>
<script>

import corrientesMap from "../corrientesMap.js"
export default {
  name: "CorrientesMap",
  data: function () {
    return {
      svgId: "corrientesMap",
      mapAttr: {
        viewBoxWidth: 700,
        viewBoxHeight: 700,
        imageWidth: 100,
        imageHeight: 100,
      },
      svgContainer: null
    }
  },
  mounted: function () {
    this.generateVenueMap()
  },
  methods: {
    generateVenueMap: function () {
      const vue = this;
      const mapData = corrientesMap.g.path
      const svgContainer = vue.$svg("corrientesMap").size('70%', '60%').viewbox(-120, -10, vue.mapAttr.viewBoxWidth, vue.mapAttr.viewBoxHeight);
      vue.svgContainer = svgContainer;
      mapData.forEach((pathObj) => {
        vue.generatePath(svgContainer, pathObj);
      })
    },
    generatePath: function (svgCont, pathObj) {
      const vue = this;

      const attrs = {
        /**'fill': "#689F38",**/
        'stroke': "white",
        'stroke-width': 2,
        'id': pathObj["-id"],
          'fill': pathObj["-fill"],
        'direccion': pathObj["-direccion"],
          'telefono': pathObj["-telefono"],
          'correo': pathObj["-correo"],
          'delegado': pathObj["-delegado"],
      };
      const element = svgCont.path(pathObj["-d"]).attr(attrs);
      element.click(function () {
        const title = this.node.attributes["id"].value;
        const direccion = this.node.attributes["direccion"].value;
          const telefono = this.node.attributes["telefono"].value;
          const correo = this.node.attributes["correo"].value;
          const delegado = this.node.attributes["delegado"].value;
        vue.$emit("map-clicked", {direccion, title, telefono, correo, delegado });
      })

    }
  }

}
</script>

<style>
.svg-container {
    width: 100%;
}

.svg-container path:hover{
    fill: #1B5E20;
}

</style>


