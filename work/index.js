function btn_calc(){
let list2 = document.getElementsByTagName('li');

for (let li of list2) {
    let descendantsCount = li.getElementsByTagName('li').length;
    if (!descendantsCount) {
        continue;
    }
    li.firstChild.data += ' [' + descendantsCount + ']';
}

}


let list = document.querySelector('.list')
let btn = document.querySelector('.btn-add')
let input = document.querySelector('.name')

let removeNode = (node) => {
    node.addEventListener('click', () => {
        node.remove()
    })
}

btn.addEventListener('click', () => {
    const name = input.value.trim()
    if (name.length > 0) {
        let node = document.createElement('li')

        node.innerText = name
        removeNode(node)

        list.append(node)
        input.value = ''
    }
})


