function changeStyle(){
	var paragraph = document.getElementsByClassName('paral');
	
	var firstParaText = paragraph[0].innerHTML;
	var secondParaText = paragraph[1].innerHTML;
	var addThem = paragraph[2].innerHTML = firstParaText + secondParaText;

	var firstParaText = paragraph[0].innerHTML = " ";
	var secondParaText = paragraph[1].innerHTML = " ";
}