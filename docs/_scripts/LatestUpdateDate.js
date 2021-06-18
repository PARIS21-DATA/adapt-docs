const desiredRepo = "adapt-docs";
const dateTagClass = ".date";

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function()
{
if (this.readyState == 4 && this.status == 200)
{
	let repos = JSON.parse(this.responseText);

	repos.forEach((repo)=>{
	if (repo.name == desiredRepo)
	{
		var lastUpdated = new Date(repo.updated_at);
		var day = lastUpdated.getUTCDate();
		var month = lastUpdated.getUTCMonth() + 1;
		var year = lastUpdated.getUTCFullYear();
		$(dateTagClass).text(`Updated ${year}-${month}-${day}`);
	}
	});
}
};
xhttp.open("GET", "https://api.github.com/users/paris21-data/repos", true);
xhttp.send();
