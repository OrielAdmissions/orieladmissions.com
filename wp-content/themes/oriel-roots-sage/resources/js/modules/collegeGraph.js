import Alpine from 'alpinejs';
import { createTooltip } from './tooltips';

import brown from '@images/college-logos/brown.svg';
import cornell from '@images/college-logos/cornell-university.svg';
import yale from '@images/college-logos/yale.svg';
import nyu from '@images/college-logos/nyu.svg';
import mit from '@images/college-logos/mit.svg';
import princeton from '@images/college-logos/princeton.svg';
import johnshopkins from '@images/college-logos/johns-hopkins.svg';
import upenn from '@images/college-logos/university-of-pennsylvania.svg';
import harvard from '@images/college-logos/harvard.svg';
import dartmouth from '@images/college-logos/dartmouth.svg';
import columbia from '@images/college-logos/columbia-university.svg';
import duke from '@images/college-logos/duke.svg';

Alpine.data('collegeGraph', () => ({
  collegeData: {
    brown: {
      nationalAverage: '5.4%',
      orielAverage: '20%',
      logo: brown,
      logoWidth: 125,
    },
    cornell: {
      nationalAverage: '7.8%',
      orielAverage: '30%',
      logo: cornell,
      logoWidth: 150,
    },
    columbia: {
      nationalAverage: '3.9%',
      orielAverage: '20%',
      logo: columbia,
      logoWidth: 170,
    },
    duke: {
      nationalAverage: '5.4%',
      orielAverage: '25%',
      logo: duke,
      logoWidth: 100,
    },
    dartmouth: {
      nationalAverage: '5.4%',
      orielAverage: '20%',
      logo: dartmouth,
      logoWidth: 150,
    },
    harvard: {
      nationalAverage: '3.2%',
      orielAverage: '15%',
      logo: harvard,
      logoWidth: 150,
    },
    yale: {
      nationalAverage: '3.9%',
      orielAverage: '20%',
      logo: yale,
      logoWidth: 80,
    },
    princeton: {
      nationalAverage: '4.5%',
      orielAverage: '25%',
      logo: princeton,
      logoWidth: 130,
    },
    nyu: {
      nationalAverage: '8.0%',
      orielAverage: '33%',
      logo: nyu,
      logoWidth: 100,
    },
    mit: {
      nationalAverage: '4.5%',
      orielAverage: '25%',
      logo: mit,
      logoWidth: 80,
    },
    upenn: {
      nationalAverage: '5.9%',
      orielAverage: '30%',
      logo: upenn,
      logoWidth: 120,
    },
    johnshopkins: {
      nationalAverage: '6.2%',
      orielAverage: '25%',
      logo: johnshopkins,
      logoWidth: 140,
    },
  },

  init() {
    this.$el.querySelectorAll('.bar').forEach((barElement) => {
      const collegeName = barElement.id.toLowerCase();
      const data = this.collegeData[collegeName];

      if (data) {
        const tooltipContent = `
  <div class="p-6">
    <img src="${data.logo}" alt="${collegeName} Logo" class="mb-4" width="${data.logoWidth}" />
    <div><span class="inline-block rounded-full bg-[#C3A6A3] size-3 mr-2"></span>${data.nationalAverage} National Acceptance Rate</div>
    <div><span class="inline-block rounded-full bg-oriel size-3 mr-2"></span>${data.orielAverage} Oriel Admissions Acceptance Rate</div>
  </div>
`;
        createTooltip(barElement, tooltipContent);
      }
    });
  },
}));
export default Alpine;
