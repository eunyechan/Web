function show(){
    alert('show!!');
}

//다른곳에서 show()를 사용하게 하려면 추출(export)해야 함
export default show;    //deafault 키워드를 가진 것이 문서 1개 있어야 함

//여러개 export가능
export function aaa(){
    alert('aaa');
}

export default aaa; //ERROR - 한개에 문서에는 default가 1개만 가능
//export aaa;   함수는 옆에다가 export 해야 함 따로 불가능
export const num= 100;
export let age= '변수';