
        function toggleDescription() {
            var expandedDescription = document.getElementById('expandedDescription');
            var learnMoreLink = document.getElementById('learnMoreLink');
            var viewLessLink = document.getElementById('viewLessLink');

            if (expandedDescription.classList.contains('hidden')) {
                // Show description and change link text
                expandedDescription.classList.remove('hidden');
                learnMoreLink.classList.add('hidden'); // Hide "Learn More" link
                viewLessLink.classList.remove('hidden'); // Show "View Less" link

                // Scroll to the end of the page
                window.scrollTo({
                    top: document.body.scrollHeight,
                    behavior: 'smooth'
                });
            } else {
                // Hide description and change link text
                expandedDescription.classList.add('hidden');
                learnMoreLink.classList.remove('hidden'); // Show "Learn More" link
                viewLessLink.classList.add('hidden'); // Hide "View Less" link

                // Scroll to the Learn More section
                expandedDescription.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        