(async function() {
    async function logJSONData() {
        const response = await fetch("/api/furnitures");
        const jsonData = await response.json();
        console.log(jsonData);


        return jsonData;

    }


    let list = await logJSONData();


    const template = `
    
                    <div class="item-card-gallery-card home-card">
                      <img alt="image"
                        src="$image"
                        class="item-card-image" />
                      <div class="item-card-container">
                        <h3 class="item-card-text">
                          <span>$furnitureName</span>
                        </h3>
                        <div class="item-card-container1">
                          <svg viewBox="0 0 1024 1024" class="item-card-icon">
                            <path d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z">
                            </path>
                          </svg><svg viewBox="0 0 1024 1024" class="item-card-icon02">
                            <path d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z">
                            </path>
                          </svg><svg viewBox="0 0 1024 1024" class="item-card-icon04">
                            <path d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z">
                            </path>
                          </svg><svg viewBox="0 0 1024 1024" class="item-card-icon06">
                            <path d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z">
                            </path>
                          </svg><svg viewBox="0 0 1024 1024" class="item-card-icon08">
                            <path d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z">
                            </path>
                          </svg>
                        </div>
                        <div class="item-card-container2">
                          <span class="item-card-value">
                            <span>$$price</span>
                          </span>
                        </div>
                      </div>
                 </div>
    `
    const htmllist = list.map(item=>{

        let imagecard = "" + template.replace("$furnitureName", item.furnitureName);
        imagecard = imagecard.replace("$image", item.image);
        imagecard = imagecard.replace("$price", item.price);
        return imagecard;
    })

    document.getElementById("applist").innerHTML = htmllist.join(" ")

})();