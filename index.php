<?php
// I can't think of a better way to approach this.

if (isset($_GET["l"]) || isset($_GET["c"]))
{
	if ($_GET["l"] == "fr")
	{
		if ($_GET["C"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_FR/recommended_links_FR.html");
		}

		else if ($_GET["C"] == "CA")
		{
			header("Location: http://rs.wii.rc24.xyz/content/CA_FR/recommended_links_FR.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_FR/recommended_links_FR.html");
		}
	}

	else if ($_GET["l"] == "es")
	{
		if ($_GET["C"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_SP/recommended_links_SP.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_SP/recommended_links_SP.html");
		}
	}

	else if ($_GET["l"] == "en")
	{
		if ($_GET["C"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_EN/recommended_links.html");
		}

		else if ($_GET["C"] == "CA")
		{
			header("Location: http://rs.wii.rc24.xyz/content/CA_EN/recommended_links.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_EN/recommended_links.html");
		}
	}

	else
	{
		header("Location: http://rs.wii.rc24.xyz/content/LA_EN/recommended_links.html");
	}
}
?>
