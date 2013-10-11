var json;
	var getList;
	
	function storeItem(num, item) {
		try { 
				window.localStorage.setItem(num, item);
			} 
			catch (e) {
				if (e == QUOTA_EXCEEDED_ERR) { console.log('Quota exceeded!'); }
			}
	}
	
	function getStoredData() {
		getList = JSON.parse(localStorage["todolist"]);
		if(typeof getList == 'object') {
			return getList;
		}
	}
	
	function addNewToDo() {
		var temp = document.getElementById('newItem').value;
        getList.todo.push(temp);
		addListItem(document.getElementById('newItem').value);
		storeItem("todolist", JSON.stringify(getList));
		return false;
	}
	
	function markAsDone(a) {
	
		var item = a.innerHTML;
		a.parentNode.parentNode.removeChild(a.parentNode);
		
		var temp = new Array();
		
		for (var i = 0; i < getList.todo.length; i++ ) {
			if (item != getList.todo[i]) {
				temp.push(getList.todo[i]);
			}
		}
		
		getList.todo = temp;

	
		getList.done.push(item);
		addDoneItem(item)
		storeItem("todolist", JSON.stringify(getList));
		return false;
	}
	
	function addListItem(item) {
		var list = document.getElementById('list');
		
		var newList = document.createElement('li');
		
		//newList.innerHTML = ''+item+'<a href="#" title="Mark As Done?" onclick="markAsDone(this);" >Add</a>';
		
		 newList.innerHTML = '<a href="#" title="Mark As Done?" onclick="markAsDone(this);" >'+item+'</a>';
		 
		//newList.innerHTML = item;
		list.appendChild(newList);
	}
		
	
	function addDoneItem(item) {
		var list = document.getElementById('done');
		var newList = document.createElement('li');
		//newList.innerHTML = '<a href="#" title="Mark As Done?" onclick="markAsDone(this);" rel="'+num+'">'+item+'</a>';
		newList.innerHTML = item;
		list.appendChild(newList);
		return false;
	}
	
	
	
	function clearAll() {
		localStorage.clear();
		var element = document.getElementById('list');
		while (element.firstChild) {
  			element.removeChild(element.firstChild);
		}
		var element = document.getElementById('done');
		while (element.firstChild) {
  			element.removeChild(element.firstChild);
		}
		getList = {
				"todo":[],
				"done":[]
				};

                onit(); //build up your list again
		return false;
	}
	
	function onit(){ 
		
		document.getElementById('notsupport').style.display = 'none';
		if (!window.localStorage) {
			document.getElementById('notsupport').style.display = 'block';
		} else {
			
			if(localStorage.length == 0) {
				json = {
				"todo":[
					"1. The Red Lion",
					"2. The Victoria",
					"3. The Ram &amp; Shackle (optional)",
					"4. The Friendship",
					"5. Trof (or other optional Fallowfield pub)",
					"6. Hardy's",
					"7. The Rampant Lion",
					"9. Ford Maddox Brown",
					"10. The Oxford",
					"11. The Grovel (optional as probably shut)",
					"12. Big hands",
					"13. The Pub (the pub, kid)",
					"14. Sand Bar"
					],
				"done":[/*"Move pubs over here!"*/],
				}
				storeItem("todolist", JSON.stringify(json));
			}
			
			
			var form = document.getElementById('submit');
			form.onsubmit = addNewToDo;
			
			
			var myArray = new Array();
			myArray = getStoredData();
			
			for (var i = 0; i < myArray.todo.length; i++) {
				addListItem(myArray.todo[i]);
			}
			
			//Get Done Task
			for (var i = 0; i < myArray.done.length; i++) {
				addDoneItem(myArray.done[i]);
			}
		}
		
		var webappCache = window.applicationCache;
		
		function updateCache() {
			webappCache.swapCache();
		}
		
		function errorCache() {
			console.log("Cache failed to update");
		}
		
		webappCache.addEventListener("updateready", updateCache, false);
		webappCache.addEventListener("error", errorCache, false);
	}
	
